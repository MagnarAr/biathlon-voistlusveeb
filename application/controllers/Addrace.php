<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Addrace extends MY_Controller {

    const CURRENT_CONTROLLER = 'Addrace';
    const CURRENT_PAGE_TITLE = 'Lisa võistlus';

    public $current_page_title = '';
    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index(){

        $this->load->library('facebook');
        $user = $this->facebook->getUser();
        $this->current_page_title = $this->lang->line('ADD_RACE');

        $data['js_to_load']="getClubsData.js";
        $this->login();
        //$this->load->view('page_header');
        if($user){
            $this->load->view('add_race');
        }
        else{
            $this->load->view('auth_error');
        }
        $this->load->view('page_footer', $data);

    }

    public function create_race() {

        $this->load->database();
        $this->load->library('form_validation');
        $errors = false;
        $this->form_validation->set_rules(array(
            array(
                'field' => 'race_name',
                'label' => 'Nimi',
                'rules' => 'required',
            ),
            array(
                'field' => 'racetype',
                'label' => 'Tüüp',
                'rules' => 'required',
            ),
            array(
                'field' => 'Distants[]',
                'label' => 'Distants',
                'rules' => 'required',
            ),
            array(
                'field' => 'race_date',
                'label' => 'Date',
                'rules' => 'callback_date_valid',
            )
        ));

        foreach($_POST["Vanuseklass"] as $key => $value)
        {
            if ($this->form_validation->run()) {
                $this->load->model('Race');
                $race = new Race();
                $race->name = $this->input->post('race_name');
                $race->distance = $_POST["Distants"][$key];
                $race->agegroup = $_POST["Vanuseklass"][$key];
                $race->type = $_POST['racetype'];
                $race->date = $_POST['race_date'];
                $race->save();
            } else {

                $this->form_validation->set_message('required', 'Väli ei tohi olla tühi');
                $errors = true;
            }


        }
        $this->db->close();
        $this->login();
        if($errors) {
            $this->load->view('error');
        }
        else{
            $this->load->view('success');
        }
        $this->load->view('add_race');
        $this->load->view('page_footer');
    }

    public function date_valid($date)
    {
        $parts = explode("/", $date);
        if (count($parts) == 3) {
            if (checkdate($parts[1], $parts[0], $parts[2]))
            {
                return TRUE;
            }
        }
        $this->form_validation->set_message('date_valid', 'Kuupäev peab olema kujul: KK/PP/AAAA');
        return false;
    }






}

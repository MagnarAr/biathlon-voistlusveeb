<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Addresults extends CI_Controller {

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
    public function index()
    {

        $data['all_races'] = $this->getAllRaces();
        $this->load->view('page_header');
        $this->load->view('add_results', $data);
        $this->load->view('page_footer');
    }

    public function create_result_entry(){
        $this->load->database();
        $this->load->library('form_validation');
        $errors = false;

        $this->form_validation->set_rules(array(
            array(
                'field' => 'raceClasses',
                'label' => 'Võistlusklass',
                'rules' => 'required',
            ),
            array(
                'field' => 'Koht[]',
                'label' => 'Koht',
                'rules' => 'required',
            ),
            array(
                'field' => 'Bib[]',
                'label' => 'Rinnanumber',
                'rules' => 'required',
            ),
            array(
                'field' => 'Eesnimi[]',
                'label' => 'Eesnimi',
                'rules' => 'required',
            ),
            array(
                'field' => 'Perenimi[]',
                'label' => 'Perenimi',
                'rules' => 'required',
            ),
            array(
                'field' => 'L1[]',
                'label' => 'Lamades 1',
                'rules' => 'required',
            ),
            array(
                'field' => 'L2[]',
                'label' => 'Lamades 2',
                'rules' => 'required',
            ),
            array(
                'field' => 'P1[]',
                'label' => 'Püsti 1',
                'rules' => 'required',
            ),
            array(
                'field' => 'P2[]',
                'label' => 'Püsti 2',
                'rules' => 'required',
            ),
            array(
                'field' => 'Kokku[]',
                'label' => 'Kokku trahve',
                'rules' => 'required',
            ),
            array(
                'field' => 'Algus[]',
                'label' => 'Algusaja',
                'rules' => 'callback_time_valid',
            ),
            array(
                'field' => 'Lopp[]',
                'label' => 'Lõppaja',
                'rules' => 'callback_time_valid',
            )
        ));
        if (isset($_POST['Koht']))
        {
            foreach($_POST["Koht"] as $key => $value)
            {
                if ($this->form_validation->run()) {
                    $this->load->model('ResultEntry');
                    $result = new ResultEntry();

                    $result->raceid = $_POST['raceClasses'];
                    $result->place = $_POST["Koht"][$key];
                    $result->bib = $_POST["Bib"][$key];
                    $result->firstname = $_POST["Eesnimi"][$key];
                    $result->lastname = $_POST["Perenimi"][$key];
                    $result->club = $_POST["Klubi"][$key];
                    $result->prone1 = $_POST["L1"][$key];
                    $result->prone2 = $_POST["L2"][$key];
                    $result->standing1 = $_POST["P1"][$key];
                    $result->standing2 = $_POST["P2"][$key];
                    $result->total = $_POST["Kokku"][$key];
                    $result->start = $_POST["Algus"][$key];
                    $result->end = $_POST["Lopp"][$key];

                    $result->save();
                } else {
                    $errors = true;
                }


            }
        }

        $this->db->close();

        // Refresh the page
        $data['all_races'] = $this->getAllRaces();
        $this->load->view('page_header');
        if($errors) {
            $this->load->view('error');
        }
        $this->load->view('add_results', $data);
        $this->load->view('page_footer');
    }

    public function time_valid($time)
    {
        $parts = explode(":", $time);
        if (count($parts) == 3) {
            return TRUE;
        }
        $this->form_validation->set_message('time_valid', 'Kellaaeg peab olema kujul: hh:mm:ss');
        return false;
    }

    public function getAllRaces(){
        $this->load->database();
        $sql = "call GetAllRaces()";
        $query = $this->db->query($sql);

        return $query->result();
    }

    public function getRacesJSON($race_name){
        $this->load->database();
        $race_name = urldecode($race_name);
        $sql = "call GetRaceAgeGroups('".$race_name."')";
        $query = $this->db->query($sql);

        echo json_encode($query->result());
    }

}

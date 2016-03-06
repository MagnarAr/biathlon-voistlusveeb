<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Addrace extends CI_Controller {

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
        //$this->load->database();
        //$sql = "SELECT * FROM UUDISED";
        //$query = $this->db->query($sql);
        $this->load->view('page_header');
        $this->load->view('add_race');
        $this->load->view('page_footer');

        /*
        $this->load->library('parser');

        $data = array(
            'race_attribute_entries' => array(
                array('value' => 'M15', 'placeholder' => 'Vanus')
            )
        );



        $var = $this->load->view('add_race', $data);
        echo $var;
        */
    }

     public function add_race_attribute() {
         echo $this->input->post('age-group0');
         for ($x = 0; $x <= 10; $x++) {
             echo "The number is: $x <br>";
         }
         //$dom = $this->load->view('add_race');
         //echo $dom;
         //$div = $dom->getElementById('divID');

        //data['race_attributes_entries'].pushObject()
        //echo ;
    }






}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Races extends CI_Controller {

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
        $data['all_races'] = $this->getFirstRaces();
        $data['race_count'] = $this->getRaceCount()[0]->amount;


        $this->load->view('page_header');
        $this->load->view('results_page', $data);
        $this->load->view('page_footer');

    }

    public function getFirstRaces(){
        $this->load->database();
        $sql = "call GetRacesWithLimit(0, 5)";
        $query = $this->db->query($sql);
        $this->db->close();

        return $query->result();
    }

    public function loadMoreRaces($limitBegin, $amount) {
        $this->load->database();
        $sql = "call GetRacesWithLimit(".$limitBegin.", ".$amount.")";
        $query = $this->db->query($sql);

        echo json_encode($query->result());
    }

    public function getRaceCount(){
        $this->load->database();
        $sql = "call GetRaceCount()";
        $query = $this->db->query($sql);

        return $query->result();

    }

    public function getRaceCountJSON(){
        echo json_encode($this->getRaceCount()[0]->amount);
    }

}

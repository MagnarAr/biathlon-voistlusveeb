<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Raceview extends CI_Controller {

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


        $this->load->view('page_header');
        $this->load->view('race_view');
        $this->load->view('page_footer');

    }

    public function showdata($name){
        $finalRaceResults = Array();
        $ageGroupResults = Array();
        $lastAgeGroup = null;
        $raceResults = $this->getRaceResults($name);
        $lastRaceId = 0;

        foreach ($raceResults as $index => $result) {
            if($result->raceid != $lastRaceId && $lastAgeGroup != $result->agegroup) {
                $finalRaceResults[$result->raceid][0] = $result->agegroup;
                if($lastRaceId > 0) {
                    $finalRaceResults[$lastRaceId][1] = $ageGroupResults;
                    $ageGroupResults = Array();
                }
            }

            $ageGroupResults[] = $result;
            $lastRaceId = $result->raceid;
            $lastAgeGroup = $result->agegroup;

            if($index == count($raceResults) - 1) {
                $finalRaceResults[$result->raceid][1] = $ageGroupResults;
            }
        }


        $data['resultswithgroups'] = $finalRaceResults;
        $data['race_id'] = urldecode($name);
        $this->load->view('page_header');
        $this->load->view('race_view', $data);
        $this->load->view('page_footer');
    }

    private function getRaceResults($name) {
        $this->load->database();
        $name = urldecode($name);
        $sql = 'call GetGroupResults("'.$name.'")';
        $query = $this->db->query($sql);
        $this->db->close();
        return $query->result();
    }

}

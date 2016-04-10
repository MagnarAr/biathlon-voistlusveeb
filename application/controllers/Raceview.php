<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Raceview extends MY_Controller {

    const CURRENT_CONTROLLER = 'Raceview';
    const CURRENT_PAGE_TITLE = 'Võistluse vaade';

    const PAGE_TITLE_PREFIX = "Võistlus: ";
    public $current_page_title = 'test';

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


        //$this->load->view('page_header');
        $this->login();
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
        $this->current_page_title = $data['race_id'];
        $this->login();
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


    public function login(){

        $this->load->library('facebook'); // Automatically picks appId and secret from config
        // OR
        // You can pass different one like this
        //$this->load->library('facebook', array(
        //    'appId' => 'APP_ID',
        //    'secret' => 'SECRET',
        //    ));

        $user = $this->facebook->getUser();
        $data['current_page_title'] = $this->current_page_title;
        if ($user) {
            try {
                $data['user_profile'] = $this->facebook->api('/me');
            } catch (FacebookApiException $e) {
                $user = null;
            }
        }else {
            // Solves first time login issue. (Issue: #10)
            //$this->facebook->destroySession();
        }

        if ($user) {

            $data['logout_url'] = site_url($this::CURRENT_CONTROLLER.'/logout'); // Logs off application
            // OR
            // Logs off FB!
            // $data['logout_url'] = $this->facebook->getLogoutUrl();

        } else {
            $data['login_url'] = $this->facebook->getLoginUrl(array(
                'redirect_uri' => site_url($this::CURRENT_CONTROLLER),
                'scope' => array("email") // permissions here
            ));
        }
        $this->load->view('page_header',$data);

    }

}

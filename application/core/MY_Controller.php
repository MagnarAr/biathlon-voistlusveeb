<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    const CURRENT_CONTROLLER = '';
    const CURRENT_PAGE_TITLE = '';
    public $current_page_title = '';

    public function __construct(){
        parent::__construct();

        // To use site_url and redirect on this controller.
        $this->load->helper('url');
        
        $language = $this->input->cookie('user_lang',TRUE);
        $this->lang->load($language.'_lang', $language);
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

    public function logout(){

        $this->load->library('facebook');

        // Logs off session from website
        $this->facebook->destroySession();
        // Make sure you destory website session as well.

        redirect($this::CURRENT_CONTROLLER);
    }

}


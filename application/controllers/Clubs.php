<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clubs extends MY_Controller {

    const CURRENT_CONTROLLER = 'Clubs';
    const CURRENT_PAGE_TITLE = 'Klubid';

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


        $this->current_page_title = $this->lang->line('CLUBS');
        $this->login();
        //$this->load->view('page_header');
        $this->load->view('clubs');
        $this->load->view('page_footer');

    }

}

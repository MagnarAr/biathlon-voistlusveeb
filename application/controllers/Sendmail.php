<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sendmail extends MY_Controller {

    const CURRENT_CONTROLLER = 'Sendmail';
    const CURRENT_PAGE_TITLE = 'Pealeht';

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

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->current_page_title = $this->lang->line('MAIN_PAGE');
        $this->login();
        //$this->load->view('page_header');
        $this->load->view('emailsuccess');
        $this->load->view('page_footer');
    }

    public function send(){
        $this->load->library('email');

        $this->email->from($_POST['email'], $_POST['name']);
        $this->email->to('magnar.aruoja@gmail.com');

        $this->email->subject('Email from: '.$_POST['name']);
        $this->email->message($_POST['message']);

        $this->email->send();

        $this->index();

        echo $this->email->print_debugger();
    }


}

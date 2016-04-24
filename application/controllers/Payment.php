<?php

/**
 * Created by PhpStorm.
 * User: magnar
 * Date: 22/04/16
 * Time: 19:25
 */
class Payment extends MY_Controller
{

    const CURRENT_CONTROLLER = 'Payment';
    const CURRENT_PAGE_TITLE = 'Soorita makse';

    public $current_page_title = '';

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *        http://example.com/index.php/welcome
     *    - or -
     *        http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {

        $this->load->library('facebook');
        $user = $this->facebook->getUser();
        $this->current_page_title = $this->lang->line('MAKE_PAYMENT');

        $this->login();
        //$this->load->view('page_header');
        if ($user) {
            $this->load->view('paymentform');
        } else {
            $this->load->view('auth_error');
        }
        $this->load->view('page_footer');

    }

    public function pay(){

        $this->load->library('facebook');
        $user = $this->facebook->getUser();
        $this->current_page_title = $this->lang->line('MAKE_PAYMENT');

        $data['PAYMENT_AMOUNT'] = $_POST['payment_amount'];
        $this->login();
        //$this->load->view('page_header');
        if ($user) {
            $this->load->view('pay', $data);
        } else {
            $this->load->view('auth_error');
        }
        $this->load->view('page_footer', $data);

    }

    public function success(){
        $this->login();
        $this->load->view('payment_success');
        $this->load->view('page_footer');
    }

    public function cancelled(){
        $this->login();
        $this->load->view('payment_cancelled');
        $this->load->view('page_footer');
    }

}
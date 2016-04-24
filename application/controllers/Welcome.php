<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

	const CURRENT_CONTROLLER = 'Welcome';
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
		$data['js_to_load']="getClubsData.js";
		$this->login();
		//$this->load->view('page_header');
		$this->load->view('welcome_message', $data);
		$this->load->view('page_footer');
	}


}

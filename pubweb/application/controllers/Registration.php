<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {


 public function __construct()
    {
        parent::__construct();
	$this->load->helper('form');
	$this->load->helper('language');
	$this->lang->load('registration');
		
    }

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
	public function address()
	{
		$this->load->view('address_registration');
	}

	public function general()
	{
		$this->load->view('user_registration',array("name"=>"Arturo"));
	}
}

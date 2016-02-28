<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	var $errors = array();

 public function __construct()
    {
        parent::__construct();
	$this->load->helper('form');
	$this->load->helper('UI');
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
		if($this->input->server('REQUEST_METHOD') == "POST" && empty($this->errors) )
		{
			$this->post_address();
		}
		else
		{
			$data = array();
			$data["errors"] = $this->errors;
			$this->load->view('address_registration',$data);
		}

	}

	public function post_address() 
	{
		if($data = $this->input->post() !== false)
		{
			$this->load->model('Registration_model');

			if( $this->Registration_model->addAddress($data) == true)
			{
				$this->load->view('address_registration');
			} 
			else
			{
				$this->errors[] = lang("user_address_error_try_again");
				$this->general();
			}
		}
	}



}

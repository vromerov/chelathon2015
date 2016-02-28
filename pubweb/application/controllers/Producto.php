<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Producto extends MY_Controller {

	var $errors = array();

 public function __construct()
    {
        parent::__construct();
	$this->load->helper('form');
	$this->load->helper('ui');
	$this->load->helper('language');
	$this->lang->load('registration');
	$this->load->helper('url');
    }   
 
	public function index()
	{
			$this->load->model('Producto_model','',true);
			$data = $this->Producto_model->get_last_ten_entries();
			$this->send($data);
	}


	public function post_general()
	{
		if($data = $this->input->post() !== false)
		{

			$this->load->model('Registration_model');

			if( $this->Registration_model->create($data) == true)
			{
				$this->load->view('address_registration');
			} 
			else
			{
				$this->errors[] = lang("user_registration_error_try_again");
				$this->general();
			}
		}
	}

	public function general()
	{
		
		if($this->input->server('REQUEST_METHOD') == "POST" && empty($this->errors) )
		{
			$this->post_general();
		}
		else
		{	
			$data = array();
			$data["errors"] = $this->errors;


		$this->render('user_registration',$data);

		}

	}
}

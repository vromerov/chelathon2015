<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends MY_Controller {

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
 

	public function _post()
	{
		$data = $this->input->post();

		if($data !== false)
		{

		$this->load->model('Usuario_model','',true);

			if( $this->Usuario_model->create($data) == true)
			{
				$data = array();
				$code = 203;
			} 
			else
			{
				$data = array();
				$code = 500;
			}

			$this->send($data,$code);
		}
	}

	public function index()
	{

		switch($this->input->server('REQUEST_METHOD') )
		{
			case "POST":
			$this->_post();
		}
	}
}

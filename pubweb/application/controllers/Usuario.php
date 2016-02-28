<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends MY_Controller {

	 public function __construct()
	 {
		parent::__construct();
		$this->load->helper('language');
		$this->load->helper('url');
		$this->lang->load('usuario');
    	}   
 
	public function _post()
	{
		$data = $this->input->post();

		$this->load->model('Usuario_model','',true);

		if( $this->validate($this->Usuario_model,$data) !== false)
		{
			if( true == $result = $this->Usuario_model->create($data) )
			{
				$data = array();
				$code = 201;
				header("Location: ".base_url(index_page()."/usuario/".$this->Usuario_model->usuario_id));
				$this->add_error_message("user_create_success");			
			} 
			else
			{
				if($result === 0)
				{
				$data = array();
				$code = 409;
				$this->add_error_message("user_already_exists");
				}
				else
				{
				$data = array();
				$code = 500;
				$this->add_error_message("user_create_error_try_again");				
				}
			}
		}
		else
		{
				$data = array();
				$code = 400;
				$this->add_validation_messages();				
			
		}

		$this->send($data,$code);
	}

	public function _get($id){

			if(!empty($id))
			{
			$this->load->model('Usuario_model','',true);
			$data = $this->Usuario_model->get_by_id($id);
			$this->send($data);
			}
	}

	public function index($id='')
	{
		switch($this->input->server('REQUEST_METHOD') )
		{
			case "POST":
			$this->_post();
			break;
			case "GET":
			$this->_get($id);
			break;

		}
	}
}

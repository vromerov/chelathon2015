<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    public $template=null;
    public $error = array();
    public $success = array();

<<<<<<< HEAD
	public function add_success_message($index)
	{
		$this->success[] = lang($index);
	}

	public function add_error_message($index)
	{
		$this->error[] = lang($index);
	}

	public function add_validation_messages()
	{
		$this->error = array_merge($this->form_validation->error_array(),$this->error);
	}

	public	function validate($model,$data,$mapper='_mapper')
	{
		$this->load->library('form_validation');
		$arr_rules = $model->get_rules();		
		$this->form_validation->set_rules($arr_rules);
		$model->$mapper($data);
		$this->form_validation->set_data(get_object_vars($model));
		return $this->form_validation->run() == TRUE;


	}
=======
    public $utils =[];

>>>>>>> 595705957352bbd0f84a43032d0c182c67f7e4b7
    public function __construct()
    {
       parent::__construct();
	$_POST = json_decode(file_get_contents("php://input"), true);

        if(is_null($this->template)){
            $this->template = 'layouts/default';
        }   
	
    }

	public function render($center_path,$center_data,$sidebar_path="",$sidebar_data="")
	{


        return $this->load->view($this->template, array('center' =>  $this->load->view($center_path,$center_data,true)));

	}

	public function send($response,$statuscode=200)
	{

	$message = '';

	if(!empty($this->error))
	{
		$message = implode('|',$this->error);
	}
	elseif(!empty($this->success))
	{
		$message = implode('|',$this->success);
	}

	
	return $this->output
            ->set_content_type('application/json')
            ->set_status_header($statuscode,$message)
            ->set_output(json_encode($response));
	}

}

?>

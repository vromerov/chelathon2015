<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    public $template=null;

    public function __construct()
    {
             parent::__construct();

        if(is_null($this->template)){
            $this->template = 'layouts/default';
        }   
    }

	public function render($center_path,$center_data,$sidebar_path="",$sidebar_data="")
	{


        return $this->load->view($this->template, array('center' =>  $this->load->view($center_path,$center_data,true)));

	}

}

?>

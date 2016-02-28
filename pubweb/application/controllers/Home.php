<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	var $errors = array();

 public function __construct()
    {
        parent::__construct();
	$this->load->helper('form');
	$this->load->helper('UI');
	$this->load->helper('url');
	$this->load->helper('language');
	$this->lang->load('registration');
	$this->utils = [
			"js"	=>	[
				"jquery"	=>	"https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js",
				"bootstrap" => "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js",
				"bootstrapWizard"	=>	"http://mifreelancer.mx/util/bootstrap-wizard/jquery.bootstrap.wizard.js",
				"prettyfy"	=>	"http://mifreelancer.mx/util/bootstrap-wizard/prettify.js",
				"knockout"	=>	base_url()."/util/js/knockout.js",
				"home"	=>	base_url()."/util/js/home.js"
			],
			"css" => [
				"bootstrap"	=>	"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css",
				"theme"	=>	"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css",
				"prettyfy"	=>	"http://mifreelancer.mx/util/bootstrap-wizard/prettify.css",
				"home"	=>	base_url()."/util/css/home.css"
			],
			"img"	=>	[
				"header"	=>	base_url()."/util/images/futbol.png",
				"logo"	=>	base_url()."/util/images/logo-azul.png",
				"michelada"	=>	base_url()."/util/images/michelada.png",
				"comparte"	=>	base_url()."/util/images/comparte.png",
				"footer"	=>	base_url()."/util/images/footer.png",
				"fase_2"	=>	base_url()."/util/images/catalog/fase-2.png",
			]
		];
		
		
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
	public function index()
	{

		
		$data=[
			"utils"	=>	$this->utils
		];
		$this->render('home',$data);

	}


	public function productos() 
	{

	}



}

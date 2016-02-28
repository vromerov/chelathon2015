<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Model extends CI_Model {

private $rules;

	function get_rules()
	{
		return $this->rules;
	}

	function set_rules($_rules)
	{
		return $this->rules = $_rules;
	}

    function __construct()
    {
        parent::__construct();
    }
}

?>

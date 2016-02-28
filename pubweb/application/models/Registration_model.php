<?php
class Registration_model extends CI_Model {

    var $firstname   = '';
    var $lastname   = '';
    var $birthdate   = '';
    var $email_address   = '';
    var $cellphone_number   = '';

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
   
    function create($data)
    {

	//$this->db->insert('entries', $this);
	return false;
	return true;
    }

   
}?>

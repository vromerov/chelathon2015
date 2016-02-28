<?php
class Producto_model extends CI_Model {

    var $producto_id   = '';
    var $nombre   = '';
    var $precio   = '';
    var $estatus   = '';
  
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function get_last_ten_entries()
    {
        $query = $this->db->get('producto', 10);
        return $query->result();
    }

    function create($data)
    {
	//$this->db->insert('entries', $this);
	return false;
    }

    /**
    * 
    * 
    * 
    */
    function addAddress($data)
    {
        return true;
    }

   
}?>

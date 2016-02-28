<?php
class Orden_model extends CI_Model {

    var $orden_id   = '';
    var $calle   = '';
    var $numero_exterior   = '';
    var $numero_interior   = '';
    var $codigo_postal   = '';
    var $numero_telefonico   = '';
    var $colonia  = '';
    var $delegacion  = '';
    var $estado  = '';
    var $creado_en  = null;
    var $estatus  = 'P';
    var $usuario_direccion_id  = null;
  
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
	$this->calle = $data["calle"];
	$this->numero_exterior = $data["num_ext"];
	$this->numero_interior = $data["num_int"];
	$this->codigo_postal = $data["cp"];
	$this->numero_telefonico = $data["telefono"];
	$this->colonia = $data["colonia"];
	$this->delegacion = $data["delegacion"];
	$this->estado = $data["estado"];
	$this->creado_en = date('Y-m-d H:i:s');
	$this->entrega_inmediata = $data["inmediata"];
	$this->entregar_en = date('Y-m-d H:i:s');
	$this->db->insert('orden', $this);
	$this->load->model('OrdenDetalle_model','',true);
	$order_id = $this->db->insert_id();
	$this->OrdenDetalle_model->create($data['detalle'],$order_id);
	return true;
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

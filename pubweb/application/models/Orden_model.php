<?php
class Orden_model extends MY_Model {

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

	$this->set_rules(array(
			array(
				'field' => 'calle',
				'label' => 'Calle',
				'rules' => 'required'
			),
			array(
				'field' => 'numero_exterior',
				'label' => 'Número Exterior',
				'rules' => 'required'
			),
			array(
				'field' => 'numero_interior',
				'label' => 'Número Interior',
				'rules' => 'required'
			),
			array(
				'field' => 'codigo_postal',
				'label' => 'Código Postal',
				'rules' => 'required'
			),
			array(
				'field' => 'numero_telefonico',
				'label' => 'Número Telefónico',
				'rules' => 'required'
			),
			array(
				'field' => 'colonia',
				'label' => 'Colonia',
				'rules' => 'required'
			),
			array(
				'field' => 'delegacion',
				'label' => 'Delegación',
				'rules' => 'required'
			),
			array(
				'field' => 'estado',
				'label' => 'Estado',
				'rules' => 'required'
			)));

    }

function _mapper($data)
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
	$this->entrega_inmediata = empty($data["inmediata"])  ? 0:$data["inmediata"];
	$this->entregar_en = date('Y-m-d H:i:s');
	$this->db->insert('orden', $this);
	$this->load->model('OrdenDetalle_model','',true);

}
    
    function create($data)
    {
	$this->_mapper($data);
	$orden_id = $this->db->insert_id();
	$this->OrdenDetalle_model->create($data['detalle'],$orden_id);
	return true;
    }

      
}?>

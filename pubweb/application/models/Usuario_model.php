<?php
class Usuario_model extends MY_Model {

    var $usuario_id   = '';
    var $nombres   = '';
    var $apellidos   = '';
    var $fecha_nacimiento   = '';
    var $correo_electronico   = '';
    var $numero_celular   = '';
    var $llave_secreta  = '';
    var $creado_en  = '';
    var $estatus  = 'P';
    private $error = '';
  
      function __construct()
      {
        // Call the Model constructor
        parent::__construct();

	$this->set_rules(array(
			array(
				'field' => 'nombres',
				'label' => 'Nombre',
				'rules' => 'required'
			),
			array(
				'field' => 'apellidos',
				'label' => 'Apellidos',
				'rules' => 'required'
			),
			array(
				'field' => 'fecha_nacimiento',
				'label' => 'Fecha nacimiento',
				'rules' => 'required|legal_age'
			),
			array(
				'field' => 'correo_electronico',
				'label' => 'Correo Electrónico',
				'rules' => 'required'
			)));
      }

	function _mapper($data)
	{
	$this->nombres = $data["nombre"];
	$this->apellidos = $data["apellido"];
	$this->fecha_nacimiento = $data["fecha_nac"];
	$this->correo_electronico = $data["correo"];
	$this->numero_celular = $data["movil"];
	$this->llave_secreta = $data["llave"];
	$this->creado_en = date('Y-m-d H:i:s');
	}

function get_by_id($id)
{
		$this->db->select("*");
		$this->db->from('usuario');
		$this->db->where('usuario_id', $id);
		$query = $this->db->get();

		if($query->num_rows()) 
		{
		    foreach ($query->result_object() as $usuario) {
			return $usuario;
		    }           
		}
return false;
}
    
    function create($data)
    {
	$this->_mapper($data);
	
	$this->db->insert('usuario', $this);

	if($this->db->affected_rows() > 0)
	{
		$this->usuario_id = $this->db->insert_id();
		return true;
	}
	

	if ($this->error = $this->db->error()) 
	{
		return 0;	
	}
	else
	{
	return false;
	}


    }

}?>

<?php
class Usuario_model extends CI_Model {

    var $usuario_id   = '';
    var $nombres   = '';
    var $apellidos   = '';
    var $fecha_nacimiento   = '';
    var $correo_electronico   = '';
    var $numero_celular   = '';
    var $llave_secreta  = '';
    var $creado_en  = '';
    var $estatus  = 'P';
  
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function create($data)
    {
	$this->nombres = $data["nombre"];
	$this->apellidos = $data["apellido"];
	$this->fecha_nacimiento = $data["fecha_nac"];
	$this->correo_electronico = $data["correo"];
	$this->numero_celular = $data["movil"];
	$this->llave_secreta = $data["llave"];
	$this->creado_en = date('Y-m-d H:i:s');
	$this->db->insert('usuario', $this);
	return 	$this->db->insert_id();
    }

}?>

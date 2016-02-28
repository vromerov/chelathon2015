<?php
class OrdenDetalle_model extends CI_Model {

    var $cantidad   = '';
    var $subtotal   = '';
    var $total   = '';
    var $producto_id = '';
    var $orden_id = '';
    var $estatus = '';
    var $order_id = '';
	
    var $usuario_direccion_id  = null;
  
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
   
    function create($data,$order_id=0)
    {
	foreach($data as $product)
	{
		$this->db->select( sprintf( 'precio * %d AS total',$product['cantidad']));
		$this->db->from('producto');
		$this->db->where('producto_id', $product['producto_id']);
		$query = $this->db->get();

		if($query->num_rows()) 
		{
		    $product_amount = $query->result_array();

		    foreach ($product_amount as $ix => $p) {

			$this->cantidad = $product['cantidad'];
			$this->total = $p['total'];
			$this->producto_id = $product['producto_id'];
			$this->orden_id = $orden_id;
			$this->estatus = 'A';
			$this->db->insert("orden_detalle", $this);
		    }           
		}
	}
	return true;
    }
   
}?>

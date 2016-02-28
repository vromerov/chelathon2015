<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MY_Form_validation extends CI_Form_validation {

    public function error_array() {
        return $this->_error_array;
    }

 public function legal_age($date) {

	$from =  DateTime::createFromFormat('d/m/Y', $date);
	$to   = new DateTime('today');
        $this->set_message('legal_age', 'Servicio exclusivo para mayores de edad');
	return $from->diff($to)->y > 18;
        
    }

}
?>

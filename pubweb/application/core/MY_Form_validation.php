<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MY_Form_validation extends CI_Form_validation {

    public function error_array() {
        return $this->_error_array;
    }

 public function legal_age($date) {
	$from = new DateTime(date("Y-m-d", strtotime($date) ));
	$to   = new DateTime('today');
        $this->set_message('legal_age', 'Error Message Here');

	return $from->diff($to)->y > 18;
        
    }

}
?>

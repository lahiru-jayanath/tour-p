<?php

class CustomerList extends CI_Model
{
	public function __construct(){

		parent::__construct();
	}

	public function listuser(){
	##	 return $this->db->get('customer');
		 $query = $this->db->query('select * from customer');
         $result = $query->result();
         return $result;
	}

}


?>

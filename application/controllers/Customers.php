<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customers extends CI_Controller{

	public function __construct(){

		parent::__construct();
	}
	public function index()
	{
		$this->load->model('CustomerList');
		$result = $this->CustomerList->listuser();
		//$data = array('CustomerList'=>$result);
		$data['CustomerList'] = $result;
	//	print_r($data);

		$this->load->view("Profile",$data);
	}
	



}

?>
<?php 

 /**
 * 
 */
class Customer extends CI_Model
{
	
	function insertUserData()
	{

		$data = array(
				'FirstName'	=> $this->input->post('firstName',TRUE),
				'LastName' =>$this->input->post('lastName',TRUE),
				'Email'	=>$this->input->post('email',TRUE),
				'Password' =>$this->input->post('password',TRUE),	
				'DateOfBirth' =>$this->input->post('birthDate',TRUE),	
				'PhoneNumber' =>$this->input->post('phoneNumber',TRUE),	
				'Address' =>$this->input->post('address',TRUE),
				'Gender' =>$this->input->post('gender',TRUE),
		);


		return $this->db->insert('customer',$data);
	}
}





 ?>
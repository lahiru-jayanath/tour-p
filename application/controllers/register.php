<?php 

/**
 * 
 */
class register extends CI_Controller
{
	
	public function RegisterUser()
	{
		$this->form_validation->set_rules('firstName', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('Cpassword', 'Password Confirmation','required|matches[password]');



		if ($this->form_validation->run() == FALSE)
		{

			 $this->load->view('register');
		}
		else
		{
			$this->load->model('Customer');
			$responce = $this->Customer->insertUserData();
			if ($responce) {

				$this ->session-> set_flashdata('msg','Registered Scussesfully... Pleace Login');
				redirect('Welcome/login');
			}
		} 

	} 
}


 ?>  
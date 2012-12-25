<?php  

/*
	Class Auth
*/
class Auth extends CI_Controller{

	function index(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		if(!$username and !$password){
			$this->session->set_flashdata('error','undesire error');
			redirect('home', 'refresh');
		}
	}



}

?>
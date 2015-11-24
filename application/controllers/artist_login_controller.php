<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ArtistLoginController extends CI_Controller {
	
	public function index()
	{
		$this->load->view('artistLogin');
	}

	public function artist_login()
	{
		$email = $this->input->post("email");
		$password = $this->input->post("password");

		if(strlen($email) && strlen($password)){
			$this->load->model("artist");
			$returnedVal = $this->artist->login($email, $password);

			if($returnedVal){
				$this->session->set_userdata("currentUser", $returnedVal);
				redirect("atist_account_page");
			}
			else{
				$this->session->set_flashdata("error", "Invalid Log In");
				redirect("artist_login");
			}
		}
		else{
			$this->session->set_flashdata("error", "Please enter Email and Password");
			redirect("artist_login");
		}
	}
}
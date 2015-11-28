<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ArtistAccountController extends CI_Controller {
	
	public function index()
	{
		
		$currentUser = $this->session->userdata("currentUser");

		$id = $currentUser['id'];

		$this->load->model('artistAccountModel');

		$params = [
			"profile_info" => $this->artistAccountModel->get_profile_info($id),
			"artwork" => $this->artistAccountModel->get_artwork($id)
		];

		$this->load->view('artistAccount', $params);
	}

	
}
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cart extends CI_Controller {
	
	public function index()
	{
		$this->load->view('cart');
	}
}
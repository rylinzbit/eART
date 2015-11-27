<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customer extends CI_Model {

	public function customerLogin($email, $password) 
	{

		$query = "SELECT * FROM customers WHERE email = ? AND password = ?";

		$this->db->query($query, [$email, md5($password)])->row_array();
	}

	public function customerRegister() 
	{

		$md5 = md5($password);

		$query = "INSERT INTO customers (first_name, last_name, email, password) VALUES ($first_name, $last_name, $email, $md5)";

		$value = [$first_name, $last_name, $email, $md5];

		return $this->db->query($query, $values);
	}

}

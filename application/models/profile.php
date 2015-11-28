<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Model {

	public function artist_login($email, $password)
	{
		$query = "SELECT * FROM artists WHERE email = ? AND password = ?";

		$this->db->query($query, [$email, md5($password)])->row_array();
	}
	public function artist_register($first_name, $last_name, $email, $password)
	{
		$md5 = md5($password);

		$query = "INSERT INTO artists (first_name, last_name, email, password, created_at, updated_at)";

		$value = [$first_name, $last_name, $email, $password];

		return $this->db->query($query, $value);
	}
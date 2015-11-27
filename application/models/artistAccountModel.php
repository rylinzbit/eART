<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ArtistAccountModel extends CI_Model {

	public function get_profile_info($id)
	{
		$query = "SELECT * FROM artists WHERE id = ?";
		$this->db->query($query, $id)->row_array();
	}
	public function get_artwork($id)
	{
		$query = "SELECT * FROM artworks WHERE artist_id = ?";
		$this->db->query($query, $id)->row_array();
	}
}
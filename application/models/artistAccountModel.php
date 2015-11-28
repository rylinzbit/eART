<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ArtistAccountModel extends CI_Model {

	public function get_profile_info($id)
	{
		$query = "SELECT * FROM artists WHERE id = ?";
		return $this->db->query($query, $id)->row_array();
	}
	public function get_artwork($id)
	{
		$query = "SELECT * FROM artworks WHERE artist_id = ?";
		return $this->db->query($query, $id)->row_array();
	}
}
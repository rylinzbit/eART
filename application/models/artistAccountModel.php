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
	public function update_bio_about($id, $bio, $about_art) 
	{
		$query = "UPDATE artists SET bio = ? , about_art = ? WHERE id = ?";

		$VALUES = [$bio, $about_art, $id];

		return $this->db->query($query, $value);
	}
	public function newArtwork() 
	{
		$query = "INSERT INTO artworks (artist_id, title, about, price, terms, created_at, updated_at) VALUES (?, ?, ?, ?, ?, NOW(), NOW())";
		
		$VALUES = [$artist_id, $title, $about, $price, $terms];

		return $this->db->query($query, $VALUES);

	}
	public function deleteArtwork($id)
	{
		$query = "DELETE FROM artwork WHERE id = ?"
		return $this->db->query($query, $id);
	} 

}
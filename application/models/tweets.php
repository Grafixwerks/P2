<?php
//class Tweets extends CI_Model {
//	function getTweets() {
//		// single row
//		//$query = $this->db->get('users', 1);
//		// foreach
//		$query = $this->db->query('SELECT * FROM tweets');
//		return $query->result();
//		}
//}



class Tweets extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function get_tweets($slug = FALSE)
	{
	if ($slug === FALSE)
	{
		$query = $this->db->get('tweets');
		return $query->result_array();
	}

	$query = $this->db->get_where('tweets', array('slug' => $slug));
	return $query->row_array();
	}
}

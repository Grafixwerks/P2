<?php
class Tweets extends CI_Model {

	// take data from tweet form add to tweets
	public function add_tweet() {
		$data = array (
			'user_id'	=> $this->session->userdata('user_id') ,
			'tweet'		=> $this->input->post('tweet') ,
		) ;
		$query = $this->db->insert('tweets' , $data) ;
		if ($query) {
			return true ;
		} else {
			return false ;
		}
	}

	public function get_tweets() {
		$this->db->select('*');
		$this->db->from('tweets');
		$this->db->order_by("date", "desc");
		$this->db->join('users', 'users.user_id = tweets.user_id');
		$query =  $this->db->get() ;
		return $query->result();
		}


}

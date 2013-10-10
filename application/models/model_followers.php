<?php
class Model_followers extends CI_Model {

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

	// Get all tweets and user info
	function get_tweets() {
		$this->db->select('*');
		$this->db->from('tweets');
		$this->db->order_by("date", "desc");
		$this->db->join('users', 'users.user_id = tweets.user_id');
		$query =  $this->db->get() ;
		return $query->result();
		}


	// Get all users who logged in user follows
	function get_following($user_id) {
		$this->db->from('followers');
		$this->db->where('followers.follower', $user_id);
		$this->db->join('users', 'users.user_id = followers.following');
		$query =  $this->db->get() ;
		return $query->result();
		}


} ///////////////////////











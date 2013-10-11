<?php
class Model_tweets extends CI_Model {

	// insert 1 tweet
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


	// edit 1 tweet
	public function edit_tweet() {
		$data = array (
			'tweet_id'	=> $this->input->post('tweet_id') ,
			'tweet'		=> $this->input->post('tweet') ,
		) ;
		$this->db->where('tweet_id', $this->input->post('tweet_id'));
		if ($this->db->update('tweets' , $data) ) {
			return true ;
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


	// Get 1 tweet
	function get_tweet($tweet_id) {
		$query = $this->db->get_where('tweets', array('tweet_id' => $tweet_id));
		//$this->db->from('tweets');
		//$this->db->order_by("date", "desc");
		//$this->db->join('users', 'users.user_id = tweets.user_id');
		//$query =  $this->db->get() ;
		return $query->result();
		}


	// delete 1 tweet
	public function delete_tweet($tweet_id) {
		$data = array (
			'user_id'	=> $this->session->userdata('user_id') ,
			'tweet_id'	=> $tweet_id ,
		) ;
		$query = $this->db->delete('tweets' , $data) ;
		if ($query) {
			return true ;
		} else {
			redirect('error') ;
		}
	}


} ////////////////////////////



//	function get_tweets() {
//		// single row
//		//$query = $this->db->get('users', 1);
//		return $query->result();
//		}



//		$this->db->where('email' , $this->input->post('email')) ;
//		$this->db->where('pw' , md5($this->input->post('password'))) ;
//		$query = $this->db->get('users') ;
//		
//		$query = $this->db->query('SELECT * FROM tweets');
//$query =  $this->db->get('tweets') ;
//
//
//
//$this->db->select('*');









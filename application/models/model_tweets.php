<?php
class Model_tweets extends CI_Model {

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

	function get_tweets() {
		// single row
		//$query = $this->db->get('users', 1);
		// foreach
		$this->db->select('*');
		$this->db->from('tweets');
		$this->db->order_by("date", "desc");
		$this->db->join('users', 'users.user_id = tweets.user_id');
		$query =  $this->db->get() ;
		return $query->result();
		}


}
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









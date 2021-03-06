<?php
class Followers_model extends CI_Model {

	// Add logged in user as follower of user
	public function add($following) {
		$data = array (
			'follower'	=> $this->session->userdata('user_id') ,
			'following'	=> $following 
		) ;

		if ( $this->db->insert('followers' , $data) ) {
			return true ;
		} else {
			return false ;
		}
	}

	// delete logged in user as follower 
	public function delete_follower($following) {
		$data = array (
			'follower'	=> $this->session->userdata('user_id') ,
			'following'	=> $following ,
		) ;
		$query = $this->db->delete('followers' , $data) ;
		if ($query) {
			return true ;
		} else {
			redirect('error') ;
		}
	}

	// Check if logged in user if following given user 
	function is_follower($user_id) {
		$data = array (
			'follower'	=> $this->session->userdata('user_id') ,
			'following'	=> $user_id 
		) ;	
		$q =  $this->db->get_where('followers' , $data) ;
		
		if ( $q->num_rows() == 1 ) {
			return true ;
		} else { 
			return false ;
		}
	}

	// get user follower
	function get_follower() {
		$user_id = $this->session->userdata('user_id') ;
		$this->db->from('followers');
		$this->db->where('followers.following', $user_id);
		$this->db->join('users', 'users.user_id = followers.follower');
		
		$query =  $this->db->get() ;
		return $query->result();
	}

//	function get_follower($user_id) {
//		$this->db->from('followers');
//		$this->db->where('followers.follower', $user_id);
//		$query =  $this->db->get() ;
//		return $query->result();
//	}

	// get user following for account dashboard
	function get_following_dash() {
		$user_id = $this->session->userdata('user_id') ;
		$this->db->from('followers');
		$this->db->where('followers.follower', $user_id);
		$this->db->join('users', 'users.user_id = followers.following');
		$query =  $this->db->get() ;
		return $query->result();
	}
	// get tweets from people logged in user is following
	function get_following() {
		$user_id = $this->session->userdata('user_id') ;
		$this->db->select('*');
		$this->db->from('followers');
		$this->db->join('users', 'users.user_id = followers.following');
		$this->db->join('tweets', 'tweets.user_id = followers.following');
		$this->db->where('followers.follower', $user_id);
		$query =  $this->db->get() ;
		return $query->result();
	}

	// get user following
	function get_followz() {
		$user_id = $this->session->userdata('user_id') ;
		$this->db->from('followers');
		$this->db->where('followers.follower', $user_id);
		$query =  $this->db->get() ;
		return $query->result();
	}

} ///////////////////////
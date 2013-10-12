<?php
class Model_followers extends CI_Model {

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

	// get user following
	function get_follower($user_id) {
		$this->db->from('followers');
		$this->db->where('followers.follower', $user_id);
		$query =  $this->db->get() ;
		return $query->result();
	}


	// get user following
	function get_following() {
		$user_id = $this->session->userdata('user_id') ;
		$this->db->from('followers');
		$this->db->where('followers.follower', $user_id);
		$this->db->join('users', 'users.user_id = followers.following');
		$query =  $this->db->get() ;
		return $query->result();
	}



//
//
//
//	function get_user($user_id) {
//		$this->db->from('users');
//		$this->db->where('users.user_id', $user_id); 
//		
//		$query =  $this->db->get() ;
//		return $query->result();
//		}
//
//








} ///////////////////////











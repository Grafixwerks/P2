<?php
class Model_users extends CI_Model {
	
	public function can_log_in() {
		
		$this->db->where('email' , $this->input->post('email')) ;
		$this->db->where('pw' , md5($this->input->post('password'))) ;
		$query = $this->db->get('users') ;
		//$query2 = $this->db->get_where('users', array('email' => $this->input->post('email')));
		//$user_id = $query2->user_id() ;
		
		if ( $query->num_rows() == 1 ) {
			$row = $query->row() ;
			$data = array(
				'f_name'		=> $row->f_name ,
				'l_name'		=> $row->l_name ,
				'email'			=> $row->email ,
				'user_id'		=> $row->user_id ,
				'bio'			=> $row->bio ,
				'pic'			=> $row->pic ,
				'city'			=> $row->city ,
				'state'			=> $row->state ,
				'website'		=> $row->website ,
				'is_logged_in'	=> 1 
				) ;
//			$data = array(
//				'email' => $this->input->post('email') ,
//				'is_logged_in' => 1 ,
//				//'user_id' => $user_id
//			);
			$this->session->set_userdata($data);
			return true ;
		} else {
			return false ;
		}
	}

	public function add_temp_user($confirm_code) {
		// add salt
		$data = array (
			'f_name' => $this->input->post('f_name') ,
			'l_name' => $this->input->post('l_name') ,
			'email' => $this->input->post('email') ,
			'pw' => md5( $this->input->post('password') ) ,
			'confirm_code' => $confirm_code 
		) ;
		
		$query = $this->db->insert('temp_users' , $data) ;
		if ($query) {
			return true ;
		} else {
			return false ;
		}
	}


	// check confirmation code from email against temp_users
	public function is_code_valid($confirm_code) {
		$this->db->where('confirm_code' , $confirm_code ) ;
		$query = $this->db->get('temp_users') ;
		if ( $query->num_rows() == 1 ) {
			return true ;
		} else {
			return false ;
		}
	}

	
	public function add_user($confirm_code) {
		$this->db->where('confirm_code' , $confirm_code ) ;
		$temp_user = $this->db->get('temp_users') ;
		if ( $temp_user ) {
			$row = $temp_user->row() ;
			
			$data = array(
				'f_name' => $row->f_name ,
				'l_name' => $row->l_name ,
				'email' => $row->email ,
				'pw' => $row->pw 
			) ;
			
			$did_add_user = $this->db->insert('users' , $data) ;
		} if ($did_add_user) {
			$this->db->where('confirm_code' , $confirm_code) ;
			$this->db->delete('temp_users') ;
			return $data['email'] ;
		} return false ;
	}



	public function add_user_info() {
	}



} // close class Model_users



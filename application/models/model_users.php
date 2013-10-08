<?php
class Model_users extends CI_Model {
	
	public function can_log_in() {
		
		$this->db->where('email' , $this->input->post('email')) ;
		$this->db->where('pw' , md5($this->input->post('password'))) ;
		$query = $this->db->get('users') ;
		//$query2 = $this->db->get_where('users', array('email' => $this->input->post('email')));
		//$user_id = $query2->user_id() ;
		
		if ( $query->num_rows() == 1 ) {
			$data = array(
			'email' => $this->input->post('email') ,
			'is_logged_in' => 1 ,
			//'user_id' => $user_id
			);
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



} // close class Model_users



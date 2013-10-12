<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {
	// Logged in User's profile page
	public function index()
	{
		//$this->load->model('model_users');
		//$user_id = $this->session->userdata('user_id') ;
		//$data['results'] = $this->model_users->get_user($user_id) ;
		$data['title'] = $this->session->userdata('f_name') ;
		$data['title'] .= ' ' ;
		$data['title'] .= $this->session->userdata('l_name') ;
		$this->load->view('view_header', $data) ;
		$this->load->view('view_profile', $data) ;
		$this->load->view('view_footer') ;
	}

	// User profile page
	public function user($user_id)
	{
		$this->load->model('model_users');
		$this->load->model('model_followers');
		// Check if current user logged in
		if ( $this->session->userdata('user_id') != NULL ) {
			// if yes check DB if logged in user is following 
			if ( $this->model_followers->is_follower($user_id) ) {
				$data['is_following'] = TRUE ;
			} else {
				$data['is_following'] = FALSE ;
			}
			//$data['test'] = 'Hello Sexy!' ;
		} else { 
			//$data['test'] = 'Boo' ;
			$data['is_following'] = FALSE ;
		}
		$data['results'] = $this->model_users->get_user($user_id) ;
		
		
		$data['title'] = "User Profile" ;
		$this->load->view('view_header', $data) ;
		$this->load->view('view_user', $data) ;
		$this->load->view('view_footer') ;
	}


	// User dashboard page
	public function dashboard()
	{
		$this->load->model('model_users');
		$this->load->helper('form');
		
		$data['results'] = $this->model_users->get_dashboard() ;
		$data['title'] = "User Profile" ;
		$this->load->view('view_header', $data) ;
		$this->load->view('view_dashboard', $data) ;
		$this->load->view('view_footer') ;
	}


	// List all Users page
	public function list_users()
	{
		$this->load->model('model_users');
		$data['results'] = $this->model_users->get_all_user() ;
		$data['title'] = "List Users" ;
		$this->load->view('view_header', $data) ;
		$this->load->view('view_list_users', $data) ;
		$this->load->view('view_footer') ;
	}

	// List of all people current user is following
	public function list_following()
	{
		$this->load->model('model_followers');
		$this->load->model('model_users');
		$user_id = $this->session->userdata('user_id') ;
		
		$data['results'] = $this->model_followers->get_following($user_id) ;
		$data['title'] = "List following" ;
		$this->load->view('view_header', $data) ;
		$this->load->view('view_list_following', $data) ;
		$this->load->view('view_footer') ;
	}



} /////////////////////

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile_controller extends CI_Controller {
	// Logged in user profile page
	public function index()
	{
		//  check if logged in 
		if ( ($this->session->userdata('is_logged_in') == NULL) ) {
			redirect('/') ;
		}
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
		$this->load->model('users_model');
		$this->load->model('followers_model');
		
		if ( $this->session->userdata('user_id') == $user_id ) {
			redirect('profile') ;
		}
		
		// Check if current user logged in
		if ( $this->session->userdata('user_id') != NULL ) {
			// if yes check DB if logged in user is following 
			if ( $this->followers_model->is_follower($user_id) ) {
				$data['is_following'] = TRUE ;
			} else {
				$data['is_following'] = FALSE ;
			}
		} else { 
			$data['is_following'] = FALSE ;
		}
		$data['results'] = $this->users_model->get_user($user_id) ;
		
		
		$data['title'] = "User Profile" ;
		$this->load->view('view_header', $data) ;
		$this->load->view('view_user', $data) ;
		$this->load->view('view_footer') ;
	}

	// User dashboard page
	public function dashboard() {
		if ( ($this->session->userdata('is_logged_in') == NULL) ) {
			redirect('/') ;
		}
		$this->load->model('users_model');
		$this->load->model('followers_model');
		$this->load->helper('form');
		$data['results_tweet'] = $this->users_model->get_dashboard() ;
		$user_id = $this->session->userdata('user_id') ;
		// get users followed by logged in user
		$data['results_following'] = $this->followers_model->get_following_dash() ;
		$data['results_follower'] = $this->followers_model->get_follower() ;
		$data['title'] = "User Profile" ;
		$this->load->view('view_header', $data) ;
		$this->load->view('view_dashboard', $data) ;
		$this->load->view('view_footer') ;
	}

	// List all Users page
	public function list_users()
	{
		$this->load->helper('form');
		$this->load->model('users_model');
		$data['results'] = $this->users_model->get_all_user() ;
		$data['title'] = "List Users" ;
		$this->load->view('view_header', $data) ;
		// check if user logged in show tweet form or sign in
		if ($this->session->userdata('is_logged_in')) {
			$this->load->view('view_new_tweet' ) ;
		} else {
			$this->load->view('view_join_link' ) ;;
		}
		$this->load->view('view_list_users', $data) ;
		$this->load->view('view_footer') ;
	}

	// List of all people current user is following
	public function list_following()
	{
		$this->load->helper('form');
		$this->load->model('followers_model');
		$this->load->model('users_model');
		$user_id = $this->session->userdata('user_id') ;
		
		$data['results'] = $this->followers_model->get_following($user_id) ;
		$data['title'] = "List following" ;
		$this->load->view('view_header', $data) ;
		// check if user logged in show tweet form or sign in
		if ($this->session->userdata('is_logged_in')) {
			$this->load->view('view_new_tweet' ) ;
		} else {
			$this->load->view('view_join_link' ) ;;
		}
		$this->load->view('view_list_following', $data) ;
		$this->load->view('view_footer') ;
	}

} /////////////////////
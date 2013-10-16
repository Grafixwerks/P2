<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site_controller extends CI_Controller {
	
	// Index page
	public function index()
	{
		$this->load->helper('form');
		$this->load->helper('file');
		$this->load->model('tweets_model');
		$this->load->model('users_model');
		$this->load->model('followers_model');
		// results = list of tweets
		$data['results'] = $this->tweets_model->get_tweets() ;
		// all_users = list of users
		$data['all_users'] = $this->users_model->get_all_user() ;
		$user_id = $this->session->userdata('user_id') ;
		// list of tweets by people who logged in user is following
		$data['followed'] = $this->followers_model->get_following() ;
		$data['title'] = 'Home' ;
		$this->load->view('header_view', $data) ;
		// check if user logged in show tweet form or sign in
		if ($this->session->userdata('is_logged_in')) {
			$this->load->view('new_tweet_view' ) ;
			// grab followers put in array 
			$user_follows = array() ;
			$data['user_follows'] = $this->followers_model->get_followz() ;
		} else {
			$this->load->view('join_link_view' ) ;;
		}
		$this->load->view('home_view', $data) ;
		$this->load->view('footer_view', $data) ;
	}
	// generic error page
	public function error()
	{
		$data['title'] = 'Error' ;
		$this->load->view('header_view', $data) ;
		$this->load->view('error_view', $data) ;
		$this->load->view('footer_view', $data) ;
	}

} ////////////////////////////

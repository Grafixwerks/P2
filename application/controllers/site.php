<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {
	
	// Index page
	public function index()
	{
		$this->load->helper('form');
		$this->load->model('model_tweets');
		$data['results'] = $this->model_tweets->get_tweets() ;
		$data['title'] = 'Home' ;
		$this->load->view('view_header', $data) ;
		// check if user logged in show tweet form or sign in
		if ($this->session->userdata('is_logged_in')) {
			$this->load->view('view_new_tweet' ) ;
		} else {
			$this->load->view('view_join_link' ) ;;
		}
		$this->load->view('view_tweets', $data) ;
		$this->load->view('view_footer', $data) ;
	}

	public function error()
	{
		$data['title'] = 'Error' ;
		$this->load->view('view_header', $data) ;
		$this->load->view('view_error', $data) ;
		$this->load->view('view_footer', $data) ;
	}

	// moved to controller_tweet
	// tweet form validation

} ////////////////////////////

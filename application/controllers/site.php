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


	// tweet form validation
	public function tweet_validation() {
		$this->load->library('form_validation') ;
		$this->form_validation->set_rules('tweet', 'Tweet', 'required|trim|xss_clean|max_length[140]|strip_tags') ;
		// if passes validation go to home page
		if ($this->form_validation->run() == TRUE) {
			$this->load->model('model_tweets');
			
			if ($this->model_tweets->add_tweet() ) {
				redirect(site) ;
			} else redirect(site) ;	
			
			
			
		} else {
//			echo 'fail' ;
//			return false ;
		$this->load->helper('form');
		$this->load->model('model_tweets');
		$data['results'] = $this->model_tweets->get_tweets() ;
		$data['title'] = 'Home' ;
		$this->load->view('view_header', $data) ;
		$this->load->view('view_new_tweet' ) ;
		$this->load->view('view_tweets', $data) ;
		$this->load->view('view_footer', $data) ;
			}
	}



}

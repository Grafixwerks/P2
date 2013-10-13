<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Controller_tweet extends CI_Controller {
	// Not used
	public function index()
	{
		redirect('site') ;
	}

	// Delete a tweet
	public function delete($tweet_id)
	{
		$this->load->model('model_tweets');
		$this->model_tweets->delete_tweet($tweet_id) ;
		redirect('profile/dashboard') ;
	}

	// Edit a tweet
	public function edit($tweet_id)
	{
		$this->load->model('model_tweets');
		$this->load->helper('form');
		$data['results'] = $this->model_tweets->get_tweet($tweet_id) ;
		$data['title'] = "Edit Tweet" ;
		$this->load->view('view_header', $data) ;
		$this->load->view('view_edit_tweet', $data) ;
		$this->load->view('view_footer') ;
	}

	// Add new tweet 
	public function tweet_validation() {
		$this->load->library('form_validation') ;
		$this->form_validation->set_rules('tweet', 'Tweet', 'required|trim|xss_clean|max_length[140]|strip_tags') ;
		// if passes validation go to home page
		if ($this->form_validation->run() == TRUE) {
			$this->load->model('model_tweets');
			
			if ($this->model_tweets->add_tweet() ) {
				redirect($_SERVER['HTTP_REFERER']) ;
			} else redirect(error) ;	

		} else {
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



	// Edit tweet 
	public function edit_tweet() {
		$this->load->library('form_validation') ;
		$this->form_validation->set_rules('tweet', 'Tweet', 'required|trim|xss_clean|max_length[140]|strip_tags') ;
		// if passes validation 
		if ($this->form_validation->run() == TRUE) {
			$this->load->model('model_tweets');
			
			if ($this->model_tweets->edit_tweet() ) {
				redirect(dashboard) ;
			} else redirect(error) ;	
			
			
			
		} else {
//			echo 'fail' ;
//			return false ;
		$this->load->helper('form');
		$this->load->model('model_tweets');
		$data['results'] = $this->model_tweets->get_tweets() ;
		$data['title'] = 'Home' ;
		$this->load->view('view_header', $data) ;
		
		
		$this->load->view('view_footer', $data) ;
			}
	}





} //////////////////////

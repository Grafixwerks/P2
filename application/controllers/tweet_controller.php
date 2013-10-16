<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tweet_controller extends CI_Controller {

	// Delete a tweet
	public function delete($tweet_id)
	{
		$this->load->model('tweets_model');
		$this->tweets_model->delete_tweet($tweet_id) ;
		redirect('dashboard') ;
	}

	// Edit a tweet
	public function edit($tweet_id)
	{
		$this->load->model('tweets_model');
		$this->load->helper('form');
		$data['results'] = $this->tweets_model->get_tweet($tweet_id) ;
		$data['title'] = "Edit Tweet" ;
		$this->load->view('header_view', $data) ;
		$this->load->view('edit_tweet_view', $data) ;
		$this->load->view('footer_view') ;
	}

	// Add new tweet 
	public function tweet_validation() {
		$this->load->library('form_validation') ;
		$this->form_validation->set_rules('tweet', 'Tweet', 'required|trim|xss_clean|max_length[140]|strip_tags') ;
		// if passes validation go to home page
		if ($this->form_validation->run() == TRUE) {
			$this->load->model('tweets_model');
			
			if ($this->tweets_model->add_tweet() ) {
				redirect($_SERVER['HTTP_REFERER']) ;
			} else redirect('/error') ;	

		} else {
		$this->load->helper('form');
		$this->load->model('tweets_model');
		$data['results'] = $this->tweets_model->get_tweets() ;
		$data['title'] = 'Home' ;
		$this->load->view('header_view', $data) ;
		$this->load->view('new_tweet_view' ) ;
		$this->load->view('view_tweets', $data) ;
		$this->load->view('footer_view', $data) ;
			}
	}



	// Edit tweet 
	public function edit_tweet() {
		$this->load->library('form_validation') ;
		$this->form_validation->set_rules('tweet', 'Tweet', 'required|trim|xss_clean|max_length[140]|strip_tags') ;
		// if passes validation 
		if ($this->form_validation->run() == TRUE) {
			$this->load->model('tweets_model');
			
			if ($this->tweets_model->edit_tweet() ) {
				redirect('dashboard') ;
			} else redirect(error) ;	
			
			
			
		} else {
//			echo 'fail' ;
//			return false ;
		$this->load->helper('form');
		$this->load->model('tweets_model');
		$data['results'] = $this->tweets_model->get_tweets() ;
		$data['title'] = 'Home' ;
		$this->load->view('header_view', $data) ;
		
		
		$this->load->view('footer_view', $data) ;
			}
	}





} //////////////////////

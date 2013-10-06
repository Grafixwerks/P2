<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {
	// Index page
	public function index()
	{
		$this->load->model('tweets');
		$data['results'] = $this->tweets->get_tweets() ;
		$data['title'] = 'Home' ;
		$this->load->view('view_header', $data) ;
		$this->load->view('view_tweets', $data) ;
		$this->load->view('view_footer', $data) ;
	}
}

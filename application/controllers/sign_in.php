<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sign_in extends CI_Controller {
	// Index page
	public function index()
	{
		//$this->load->model('tweets');
		//$data['results'] = $this->tweets->get_tweets() ;
		$data['title'] = 'Sign in' ;
		$this->load->view('view_header', $data) ;
		$this->load->view('view_sign_in', $data) ;
		$this->load->view('view_footer', $data) ;
	}
	// validation
	public function sign_in_validation()
	{
		$this->load->library('form_validation') ;
		$this->form_validation->set_rules('email', 'Email', 'required') ;
		$this->form_validation->set_rules('password', 'Password', 'required|md5') ;
		
		if ($this->form_validation->run() == TRUE) {
			redirect('site/index') ;
		} else {
			$data['title'] = 'Sign in' ;
			$this->load->view('view_header', $data) ;
			$this->load->view('view_sign_in', $data) ;
			$this->load->view('view_footer', $data) ;
			}
	}
 
}
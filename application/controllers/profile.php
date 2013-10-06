<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {
	// User profile page
	public function index()
	{
		$this->load->model('user_model');
		$data['results'] = $this->user_model->getUsers() ;
		$data['title'] = 'Profile' ;
		$this->load->view('view_header', $data) ;
		$this->load->view('view_profile', $data) ;
		$this->load->view('view_footer', $data) ;
	}
}

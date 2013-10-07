<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sign_in extends CI_Controller {
	// Index page
	public function index()
	{
		$this->load->helper('form');
		$data['title'] = 'Sign in' ;
		$this->load->view('view_header', $data) ;
		$this->load->view('view_sign_in', $data) ;
		$this->load->view('view_footer', $data) ;
	}
	// validation
	public function sign_in_validation()
	{
		$this->load->library('form_validation') ;
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|trim|xss_clean|callback_validate_credentials') ;
		// need salt  
		$salt = 'jQ-U?1B{Wh!oq$E41=)XMVk{@.13qM' ;
		$this->form_validation->set_rules('password', 'Password', 'required|md5|trim') ;
		
		if ($this->form_validation->run() == TRUE) {
			$data = array(
				'email' => $this->input->post('email'),
				'is_logged_in' => 1
			);
			$this->session->set_userdata($data);
			redirect('site/index') ;
		} else {
			$data['title'] = 'Sign in' ;
			$this->load->view('view_header', $data) ;
			$this->load->view('view_sign_in', $data) ;
			$this->load->view('view_footer', $data) ;
			}
	}


	// validate_credentials
	public function validate_credentials()
	{
		$this->load->model('model_users');
		
		if ( $this->model_users->can_log_in() ) {
			return true ;
		} else {
			$this->form_validation->set_message('validate_credentials','Incorrect username/password.') ;
			return false ;
		}
	}

 
}














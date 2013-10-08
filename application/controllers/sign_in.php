<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sign_in extends CI_Controller {
	// Sign in form
	public function index()
	{
		$this->load->helper('form');
		$data['title'] = 'Sign in' ;
		$this->load->view('view_header', $data) ;
		$this->load->view('view_sign_in', $data) ;
		$this->load->view('view_footer') ;
	}
	// Join form
	public function join()
	{
		$this->load->helper('form');
		$data['title'] = 'Join' ;
		$this->load->view('view_header', $data) ;
		$this->load->view('view_join', $data) ;
		$this->load->view('view_footer') ;
	}

	// User sign in validation
	public function sign_in_validation()
	{
		$this->load->library('form_validation') ;
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|trim|xss_clean|callback_validate_credentials') ;
		// need salt  
		$salt = 'jQ-U?1B{Wh!oq$E41=)XMVk{@.13qM' ;
		$this->form_validation->set_rules('password', 'Password', 'required|md5|trim') ;
		
		if ($this->form_validation->run() == TRUE) {
//			$data = array(
//				'email' => $this->input->post('email'),
//				'is_logged_in' => 1
//			);
//			$this->session->set_userdata($data);
			redirect('site/index') ;
			//$data['user_info'] = $query ;
		} else {
			$data['title'] = 'Sign in' ;
			$this->load->view('view_header', $data) ;
			$this->load->view('view_sign_in', $data) ;
			$this->load->view('view_footer') ;
			}
	}


	// join validation
	public function join_validation()
	{
		$this->load->library('form_validation') ;
		$this->form_validation->set_rules('f_name', 'First name', 'required|trim|xss_clean') ;
		$this->form_validation->set_rules('l_name', 'Last name', 'required|trim|xss_clean') ;
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|trim|xss_clean|is_unique[users.email]') ;
		$this->form_validation->set_rules('password', 'Password', 'required|trim') ;
		$this->form_validation->set_rules('c_password', 'Confirm Password', 'required|trim|matches[password]') ;
		
		$this->form_validation->set_message('is_unique', 'That email address already has an account.' ) ;
		
		if ($this->form_validation->run() == TRUE) {
			// generate a random key
			$confirm_code = md5(uniqid()) ;

			
			$this->load->library('email', array('mailtype'=>'html')) ;
			$this->load->model('model_users') ;
			// build email
			$this->email->from('andy@grafixwerks.com', 'Andy Pearson') ;
			$this->email->to($this->input->post('email')) ;
			$this->email->subject('Confirm your Hly Tweet account.') ;
			
			$message = '<p>Thank you for joining Holy Tweet!</p>' ;
			$message = '<p><a href="'.base_url().'/confirm'.$confirm_code.'">Click here</a> to confirm your account.</p>' ;
			
			$this->email->message($message) ;
			
			// send user an email
			if ($this->model_users->add_temp_user($confirm_code) ) {
				if ($this->email->send() ) {
					echo 'msg sent' ;
				} else {
					echo 'fail' ;
				}			
			} else echo 'no luck adding user' ;	
			
			redirect('join-success') ;
		} else {
			$data['title'] = 'Join' ;
			$this->load->view('view_header', $data) ;
			$this->load->view('view_join', $data) ;
			$this->load->view('view_footer') ;
			}
	}

	// Join success
	public function join_success()
	{
		$data['title'] = 'join_success' ;
		$this->load->view('view_header', $data) ;
		$this->load->view('view_join_success', $data) ;
		$this->load->view('view_footer') ;
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

	// Log out
	public function sign_out()
	{
		$this->session->sess_destroy() ;
		redirect(sign_in/index) ;
	}


}  // Close class Sign_in














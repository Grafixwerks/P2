<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Follow_controller extends CI_Controller {
	// Not used
//	public function index()
//	{
//		redirect('/') ;
//	}

	// Delete a tweet
	public function delete($following)
	{
		$this->load->model('followers_model');
		$this->followers_model->delete_follower($following) ;
		redirect($_SERVER['HTTP_REFERER']) ;
	}

	// Add logged in user as follower 
	public function add($following)
	{
		$this->load->model('followers_model');
		$this->followers_model->add($following) ;
		redirect($_SERVER['HTTP_REFERER']) ;  
	}




} //////////////////////

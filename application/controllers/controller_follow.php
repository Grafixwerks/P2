<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Controller_follow extends CI_Controller {
	// Not used
	public function index()
	{
		redirect('site') ;
	}

	// Delete a tweet
	public function delete($following)
	{
		$this->load->model('model_followers');
		$this->model_followers->delete_follower($following) ;
		redirect($_SERVER['HTTP_REFERER']) ;
	}

	// Add logged in user as follower 
	public function add($following)
	{
		$this->load->model('model_followers');
		$this->model_followers->add($following) ;
		redirect($_SERVER['HTTP_REFERER']) ;  
	}




} //////////////////////

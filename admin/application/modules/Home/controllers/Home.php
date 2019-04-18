<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata("username")){
			redirect('/auth/login', 'refresh');
		}
	}

	public function front()
	{
		$data["module"] = "Login";
		$this->load->view('front',$data);
	}
}

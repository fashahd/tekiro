<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata("userlogin")){
			redirect('/auth/login', 'refresh');
		}
	}

	public function index()
	{
		$session = $this->session->userdata("userlogin");
		$data["name"]	= $session["name"];
		$data["module"] = "Event";
		$this->layout->content('index',$data);
	}
}

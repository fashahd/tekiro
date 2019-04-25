<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faq extends MX_Controller {

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
		$data["module"] = "FAQ";
		$this->layout->content('index',$data);
	}
}

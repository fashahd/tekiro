<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model("ModelUsers");
	}

	public function login()
	{
		$data["module"] = "Login";
		$this->load->view('login',$data);
	}

	function validation(){
		$username 	= $_POST["username"];
		$password	= md5($_POST["password"]);

		$cek = $this->ModelUsers->validation($username,$password);

		echo $cek;
		return;
	}
}

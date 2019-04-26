<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model("ModelHome");
	}

	public function front()
	{
		$data["category"] 	= $this->ModelHome->getCategory();
		$data["about"] 		= $this->ModelHome->getFooterLeft();
		$data["award"] 		= $this->ModelHome->getFooterRight();
		$data["social"] 	= $this->ModelHome->getFooterSocial();
		$data["module"] 	= "Home";
		$this->layout->content('front',$data);
	}
}

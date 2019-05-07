<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends MX_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct()
	{
		parent::__construct();
		$this->load->model("ModelHome");
		$this->load->model("ModelEvent");
	}

	public function front()
	{
		$data["event"] 		= $this->ModelEvent->getEvent();
		$data["about"] 		= $this->ModelHome->getFooterLeft();
		$data["award"] 		= $this->ModelHome->getFooterRight();
		$data["social"] 	= $this->ModelHome->getFooterSocial();
		$data["module"] = "Event";
		$this->layout->content('front',$data);
	}
	
	public function read($slug)
	{
		$data["event"] 		= $this->ModelEvent->getEventByID($slug);
		$data["about"] 		= $this->ModelHome->getFooterLeft();
		$data["award"] 		= $this->ModelHome->getFooterRight();
		$data["social"] 	= $this->ModelHome->getFooterSocial();
		$data["module"] = "Event";
		$this->layout->content('read',$data);
	}
}

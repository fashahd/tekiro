<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends MX_Controller {

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
	public function front()
	{
		$this->load->model("ModelProduct");
		$this->load->model("ModelHome");
		$data["module"] = "Products";
		$data["product"] 	= $this->ModelProduct->getProduct();
		$data["about"] 		= $this->ModelHome->getFooterLeft();
		$data["award"] 		= $this->ModelHome->getFooterRight();
		$data["social"] 	= $this->ModelHome->getFooterSocial();
		$this->layout->content('front',$data);
	}
}

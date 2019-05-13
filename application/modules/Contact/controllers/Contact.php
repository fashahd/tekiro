<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends MX_Controller {

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
	}
	public function front()
	{
		$data["about"] 		= $this->ModelHome->getFooterLeft();
		$data["award"] 		= $this->ModelHome->getFooterRight();
		$data["social"] 	= $this->ModelHome->getFooterSocial();
		$data["module"] = "Event";
		$this->layout->content('front',$data);
	}
	
	function sendcontact(){
		$this->load->library('email');
		$smtp = $this->getSMTP();
		$departmen = $this->getDepartmenEmail($_POST["departemen"]);
		list($host,$port,$username,$password)=$smtp;
		list($email)=$departmen;
		//configure email settings
		$config['protocol'] = 'smtp';
		$config['smtp_host'] = $host;
		$config['smtp_port'] = $port;
		$config['smtp_user'] = $username;
		$config['smtp_pass'] = $password;
		$config['mailtype'] = 'html';
		$config['charset'] = 'utf-8';
		$config['wordwrap'] = TRUE;
		$config['newline'] = "\r\n"; //use double quotes
		//$this->load->library('email', $config);
		$this->email->initialize($config);                        
		//send mail
		$this->email->from("$username","$_POST[name]");
		$this->email->to($email);
		$this->email->subject("Email FROM : $_POST[email] - ".$_POST["subject"]);
		$this->email->message($_POST["message"]);
		if($this->email->send()){
			$data = array(
				"status" 	=> 200,
				"message"	=> "Message Sent"
			);
		}else{
			$data = array(
				"status" 	=> 400,
				"message"	=> "Message Failed to Send",
				"error"		=> $this->email->print_debugger()
			);
		}
		
		echo json_encode($data);
		return;
	}

	function getSMTP(){
		$sql = "SELECT * FROM tekiro_general where id = '1'";
		$query  = $this->db->query($sql);
		$ret = "";
		if($query->num_rows()>0){
			$row = $query->row();
			return array($row->host,$row->port,$row->username,$row->password);
		}else{
			return false;
		}           
	}
	
	function getDepartmenEmail($slug = null){
		$sql = "SELECT * FROM tekiro_department where slug = ?";
		$query  = $this->db->query($sql,array($slug));
		$ret = "";
		if($query->num_rows()>0){
			$row = $query->row();
			return array($row->email);
		}else{
			return false;
		}           
	}
}

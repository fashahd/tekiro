<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata("userlogin")){
			redirect('/auth/login', 'refresh');
		}
		$this->load->model("ModelProduct");
	}

	public function index()
	{
		$session = $this->session->userdata("userlogin");
		$data["product"]	= $this->ModelProduct->getProduct();
		$data["name"]		= $session["name"];
		$data["module"] 	= "Product";
		$this->layout->content('index',$data);
	}

	function editproduct($id = null){
		$session = $this->session->userdata("userlogin");
		$data["product"]	= $this->ModelProduct->getProductByID($id);
		$data["name"]		= $session["name"];
		$data["module"] 	= "Product";
		$this->layout->content('editproduct',$data);
	}
	
	function deleteProduct(){
		if($_POST["id"]){
			$sql 	= "SELECT image_path,pdf_path FROM tekiro_product WHERE id = '$_POST[id]'";
			$query 	= $this->db->query($sql);
			if($query->num_rows()>0){
				$row = $query->row();
				if (file_exists($row->image_path)) {
					unlink($row->image_path);
				}
				if (file_exists($row->pdf_path)) {
					unlink($row->pdf_path);
				}
				$this->db->where("id",$_POST["id"]);
				$query = $this->db->delete("tekiro_product");
		
				$data = array(
					"status" 	=> 200,
					"message"	=> "Product Deleted"
				);
			}else{
				$data = array(
					"status" 	=> 400,
					"message"	=> "Failed To Delete Product"
				);
			}
		}
		echo json_encode($data);
		return;
	}

	function updateProduct(){
		if($_FILES["media_cover"]["name"] != ''){
			$validextensions = array("jpeg", "jpg", "png");
			$temporary 		= explode(".", $_FILES["media_cover"]["name"]);
			$file_extension = end($temporary);
			if ((($_FILES["media_cover"]["type"] == "image/png") || ($_FILES["media_cover"]["type"] == "image/jpg") || ($_FILES["media_cover"]["type"] == "image/jpeg")) && ($_FILES["media_cover"]["size"] < 2097152) && in_array($file_extension, $validextensions)) {
				if ($_FILES["media_cover"]["error"] > 0)
				{
					$response = "error";
					$message = "Upload Image Cover Error";
					$data = array(
						"status"	=> $response,
						"message" 	=> $message
					);

					echo json_encode($data);
					return;
				}else
				{
					$url = base_url()."appsources/media/";
					$image=basename($_FILES['media_cover']['name']);
					$image=str_replace(' ','|',$image);
					$type = explode(".",$image);
					$type = $type[count($type)-1];
					$tmppath="appsources/media/".uniqid(rand()).".".$type; // uniqid(rand()) function generates unique random number.
					move_uploaded_file($_FILES['media_cover']['tmp_name'],$tmppath);
					$image_cover = $tmppath;
					

					$data = array(
						"image_path" 		=> $image_cover
					);
					$this->db->where("id",$_POST["id"]);
					$return = $this->db->update("tekiro_product",$data);
				}
			}else
			{
				$response = "max_upload";
				$message = "Image Cover Size More Than 2MB";
				$data = array(
					"status"	=> $response,
					"message" 	=> $message
				);

				echo json_encode($data);
				return;
			}
		}
		
		if($_FILES["media_pdf"]["name"] != ''){
			$validextensions = array("pdf");
			$temporary 		= explode(".", $_FILES["media_pdf"]["name"]);
			$file_extension = end($temporary);
			if ((($_FILES["media_pdf"]["type"] == "application/pdf")) && ($_FILES["media_pdf"]["size"] < 5242880) && in_array($file_extension, $validextensions)) {
				if ($_FILES["media_pdf"]["error"] > 0)
				{
					$response = "error";
					$message = "Upload PDF File Error";
					$data = array(
						"status"	=> $response,
						"message" 	=> $message
					);

					echo json_encode($data);
					return;
				}else
				{
					$url = base_url()."appsources/files/";
					$image=basename($_FILES['media_pdf']['name']);
					$image=str_replace(' ','|',$image);
					$type = explode(".",$image);
					$type = $type[count($type)-1];
					$tmppath="appsources/files/".uniqid(rand()).".".$type; // uniqid(rand()) function generates unique random number.
					move_uploaded_file($_FILES['media_pdf']['tmp_name'],$tmppath);
					$file_pdf = $tmppath;

					$data = array(
						"pdf_path" 		=> $file_pdf
					);
					$this->db->where("id",$_POST["id"]);
					$return = $this->db->update("tekiro_product",$data);
				}
			}else
			{
				$response = "max_upload";
				$message = "PDF File Size More Than 5MB";
				$data = array(
					"status"	=> $response,
					"message" 	=> $message
				);

				echo json_encode($data);
				return;
			}
		}

		$data = array(
			"title" 		=> $_POST["title"],
			"title_id" 		=> $_POST["title_id"]
		);
		$this->db->where("id",$_POST["id"]);
		$return = $this->db->update("tekiro_product",$data);
		if($return){
			$data = array(
				"status"	=> "success",
				"message" 	=> "Product Updated"
			);
		}else{
			$data = array(
				"status"	=> "error",
				"message" 	=> "Product Failed To Update"
			);
		}

		echo json_encode($data);
		return;
	}

	function addProduct(){
		if($_FILES["media_cover"]["name"] != ''){
			$validextensions = array("jpeg", "jpg", "png");
			$temporary 		= explode(".", $_FILES["media_cover"]["name"]);
			$file_extension = end($temporary);
			if ((($_FILES["media_cover"]["type"] == "image/png") || ($_FILES["media_cover"]["type"] == "image/jpg") || ($_FILES["media_cover"]["type"] == "image/jpeg")) && ($_FILES["media_cover"]["size"] < 2097152) && in_array($file_extension, $validextensions)) {
				if ($_FILES["media_cover"]["error"] > 0)
				{
					$response = "error";
					$message = "Upload Image Cover Error";
					$data = array(
						"status"	=> $response,
						"message" 	=> $message
					);

					echo json_encode($data);
					return;
				}else
				{
					$url = base_url()."appsources/media/";
					$image=basename($_FILES['media_cover']['name']);
					$image=str_replace(' ','|',$image);
					$type = explode(".",$image);
					$type = $type[count($type)-1];
					$tmppath="appsources/media/".uniqid(rand()).".".$type; // uniqid(rand()) function generates unique random number.
					move_uploaded_file($_FILES['media_cover']['tmp_name'],$tmppath);
					$image_cover = $tmppath;
					$response = "success";
				}
			}else
			{
				$response = "max_upload";
				$message = "Image Cover Size More Than 2MB";
				$data = array(
					"status"	=> $response,
					"message" 	=> $message
				);

				echo json_encode($data);
				return;
			}
		}
		
		if($_FILES["media_pdf"]["name"] != ''){
			$validextensions = array("pdf");
			$temporary 		= explode(".", $_FILES["media_pdf"]["name"]);
			$file_extension = end($temporary);
			if ((($_FILES["media_pdf"]["type"] == "application/pdf")) && ($_FILES["media_pdf"]["size"] < 5242880) && in_array($file_extension, $validextensions)) {
				if ($_FILES["media_pdf"]["error"] > 0)
				{
					$response = "error";
					$message = "Upload PDF File Error";
					$data = array(
						"status"	=> $response,
						"message" 	=> $message
					);

					echo json_encode($data);
					return;
				}else
				{
					$url = base_url()."appsources/files/";
					$image=basename($_FILES['media_pdf']['name']);
					$image=str_replace(' ','|',$image);
					$type = explode(".",$image);
					$type = $type[count($type)-1];
					$tmppath="appsources/files/".uniqid(rand()).".".$type; // uniqid(rand()) function generates unique random number.
					move_uploaded_file($_FILES['media_pdf']['tmp_name'],$tmppath);
					$file_pdf = $tmppath;
					$response = "success";
				}
			}else
			{
				$response = "max_upload";
				$message = "PDF File Size More Than 5MB";
				$data = array(
					"status"	=> $response,
					"message" 	=> $message
				);

				echo json_encode($data);
				return;
			}
		}

		$data = array(
			"title" 		=> $_POST["title"],
			"title_id" 		=> $_POST["title_id"],
			"image_path" 	=> $image_cover,
			"pdf_path" 		=> $file_pdf,
		);
		$return = $this->db->insert("tekiro_product",$data);
		if($return){
			$data = array(
				"status"	=> "success",
				"message" 	=> "Product Added"
			);
		}else{
			$data = array(
				"status"	=> "error",
				"message" 	=> "Product Failed To Add"
			);
		}

		echo json_encode($data);
		return;
	}
}

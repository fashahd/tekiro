<?php
	class ModelProduct extends CI_Model {

        function addProduct($data = null){
            $query  = $this->db->insert("tekiro_product",$data);
            if($query){
                $response   = "success";
                $message    = "Product Added";
            }else{
                $response = "error";
                $message    = "Product failed to add";
            }
            return array($response,$message);
        }

        function updateCategory($id=null,$data = null){
            $this->db->where("id",$id);
            $query  = $this->db->update("tekiro_category",$data);
            if($query){
                $response   = "success";
                $message    = "Category Updated";
            }else{
                $response = "error";
                $message    = "Category failed to update";
            }
            return array($response,$message);
        }

        function getCategorybyID($id = null){
            $sql = "SELECT * FROM tekiro_category where id = '$id'";
            $query  = $this->db->query($sql);
            $ret = "";
            if($query->num_rows()>0){
                $row = $query->row();
                return array($row->id,$row->title,$row->title_id,$row->subtitle,$row->subtitle_id,$row->path);
            }else{
                return false;
            }           
        }

        function getProductByID($id = null){
            $sql = "SELECT * FROM tekiro_product where id = '$id'";
            $query  = $this->db->query($sql);
            $ret = "";
            if($query->num_rows()>0){
                $row        = $query->row();
                $title      = $row->title;
                $title_id   = $row->title_id;
                $image_path = $row->image_path;
                $pdf_path   = $row->pdf_path;
                $id         = $row->id;

                return array($id,$title,$title_id,$image_path,$pdf_path);
            }else{
                return false;
            }
        }

        function getProduct(){
            $sql = "SELECT * FROM tekiro_product";
            $query  = $this->db->query($sql);
            $ret = "";
            if($query->num_rows()>0){
                foreach($query->result() as $row){
                    $ret .='
                    <li class="list-group-item">                                
                        <div class="d-flex no-block align-items-center">
                        <img class="mr-3 img-fluid w-25" src="'.base_url().$row->image_path.'" alt="Generic placeholder image">
                            <div>
                                '.$row->title.'
                            </div>
                            <div class="ml-auto">
                                <a href="'.base_url().'product/editproduct/'.$row->id.'" class="btn btn-primary btn-circle"><i class="fa fa-edit"></i> </a>
                                <button onClick="confirmDeleteProduct(\''.$row->id.'\')" type="button" class="btn btn-danger btn-circle"><i class="fa fa-trash"></i> </button>
                            </div>
                        </div>
                    </li>
                    ';
                }
            }else{
                $ret = "";
            }
            return $ret;
        }
	}
?>
<?php
	class ModelProduct extends CI_Model {

        function savecategory($data = null){
            $query  = $this->db->insert("tekiro_category",$data);
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
                                <a href="'.base_url().'home/editcategory/'.$row->id.'" class="btn btn-primary btn-circle"><i class="fa fa-edit"></i> </a>
                                <button onClick="confirmDeleteCategory(\''.$row->id.'\')" type="button" class="btn btn-danger btn-circle"><i class="fa fa-trash"></i> </button>
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
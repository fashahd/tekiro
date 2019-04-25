<?php
	class ModelHome extends CI_Model {

        function savecategory($data = null){
            $query  = $this->db->insert("tekiro_category",$data);
        }

        function getCategorybyID($id = null){
            $sql = "SELECT * FROM tekiro_category where id = '$id'";
            $query  = $this->db->query($sql);
            $ret = "";
            if($query->num_rows()>0){
                $row = $query->row();
                return array($row->title,$row->title_id,$row->subtitle,$row->subtitle_id,$row->path);
            }else{
                return false;
            }           
        }

        function getCategory(){
            $sql = "SELECT * FROM tekiro_category";
            $query  = $this->db->query($sql);
            $ret = "";
            if($query->num_rows()>0){
                foreach($query->result() as $row){
                    $ret .='
                    <li class="list-group-item">                                
                        <div class="d-flex no-block align-items-center">
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
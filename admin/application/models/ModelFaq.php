<?php
	class ModelFaq extends CI_Model {

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

        function getFAQByID($id = null){
            $sql = "SELECT * FROM tekiro_faq where id = '$id'";
            $query  = $this->db->query($sql);
            $ret = "";
            if($query->num_rows()>0){
                $row = $query->row();
                return array($row->id,$row->title,$row->title_id,$row->content,$row->content_id);
            }else{
                return false;
            }           
        }

        function getFAQ(){
            $sql = "SELECT * FROM `tekiro_faq` ORDER BY created_date desc";
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
                                <a href="'.base_url().'faq/editfaq/'.$row->id.'" class="btn btn-primary btn-circle"><i class="fa fa-edit"></i> </a>
                                <button onClick="confirmDeleteFAQ(\''.$row->id.'\')" type="button" class="btn btn-danger btn-circle"><i class="fa fa-trash"></i> </button>
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
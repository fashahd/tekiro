<?php
	class ModelContact extends CI_Model {

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
            $sql = "SELECT * FROM tekiro_department where id = '$id'";
            $query  = $this->db->query($sql);
            $ret = "";
            if($query->num_rows()>0){
                $row = $query->row();
                return array($row->id,$row->title,$row->title_id,$row->email);
            }else{
                return false;
            }           
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

        function getFAQ(){
            $sql = "SELECT * FROM `tekiro_department` ORDER BY id desc";
            $query  = $this->db->query($sql);
            $ret = "<div class='table-responsive'><table class='table'>";
            if($query->num_rows()>0){
                foreach($query->result() as $row){
                    $ret .='
                    <tr>
                        <td>'.$row->title.'</td>
                        <td>
                            <a href="'.base_url().'contact/editcontact/'.$row->id.'" class="btn btn-primary btn-circle"><i class="fa fa-edit"></i> </a>
                            <button onClick="confirmDeleteContact(\''.$row->id.'\')" type="button" class="btn btn-danger btn-circle"><i class="fa fa-trash"></i> </button>
                        </td>
                    </tr>
                    ';
                }
                $ret .= "</table></div>";
            }else{
                $ret = "";
            }
            return $ret;
        }
	}
?>
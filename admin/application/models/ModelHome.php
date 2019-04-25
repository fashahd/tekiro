<?php
	class ModelHome extends CI_Model {

		function getContent(){
            $sql    = " SELECT * FROM `tekiro_general`";
            // return $sql;
            $query  = $this->db->query($sql);
            if($query->num_rows()>0){
                $row    = $query->row();
                $about     = $row->about;
            }else{
                $about = "";
            }
            return $about;
        }
	}
?>
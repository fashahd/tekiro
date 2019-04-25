<?php
	class ModelHome extends CI_Model {
		function getFooterLeft(){
            $sql    = "SELECT * FROM tekiro_general";
            $query  = $this->db->query($sql);
            if($query->num_rows()>0){
                $row = $query->row();
                $about = $row->about;
                if($this->session->userdata('site_lang') == "indonesia"){
                    $about = $row->about_id;
                }
            }else{
                $about = "";
            }
            return $about;
        }
		function getFooterRight(){
            $sql    = "SELECT * FROM `media`";
            $query  = $this->db->query($sql);
            $ret    = "";
            if($query->num_rows()>0){
                if($query->num_rows() == 1 OR $query->num_rows() == 2 ){
                    $col = "medium-3 small-6 large-3";
                }
                if($query->num_rows() == 3){
                    $col = "medium-2 small-4 large-2";
                }
                foreach($query->result() as $row){
                    $ret .= '                        
                        <div class="col '.$col.'"  >
                            <div class="col-inner text-right"  >
                                <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_'.$row->id.'">
                                    <div class="img-inner dark" >
                                        <img width="300" height="302" src="'.base_url()."admin/".$row->path.'" class="attachment-large size-large" alt="" srcset="'.base_url()."admin/".$row->path.' 300w, '.base_url()."admin/".$row->path.' 150w, '.base_url()."admin/".$row->path.' 298w" sizes="(max-width: 300px) 100vw, 300px" />                
                                    </div>
                                    <style scope="scope">
                                        #image_'.$row->id.' {
                                            width: 100%;
                                        }


                                        @media (min-width:550px) {
                                            #image_'.$row->id.' {
                                                width: 60%;
                                            }
                                        }
                                    </style>
                                </div>
                            </div>
                        </div>
                    ';
                }
            }else{
                $ret = "";
            }
            return $ret;
        }
	}
?>
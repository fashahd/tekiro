<?php
	class ModelFooter extends CI_Model {

		function getContent(){
            $sql    = " SELECT * FROM `tekiro_general`";
            // return $sql;
            $query  = $this->db->query($sql);
            if($query->num_rows()>0){
                $row        = $query->row();
                $about      = $row->about;
                $about_id   = $row->about_id;
            }else{
                $about = "";
                $about_id = "";
            }
            return array($about,$about_id);
        }

        function savemedia($page=null,$path=null){
            $data   = array(
                "path" => $path,
                "page" => $page
            );
            $query  = $this->db->insert("media",$data);
        }

        function getAward(){
            $sql = "SELECT * FROM `media` where page = 'footer'";
            $query  = $this->db->query($sql);
            $ret = "";
            if($query->num_rows()>0){
               foreach($query->result() as $row){
                    $ret .='
                        <div class="col-lg-3 col-md-6">
                            <div class="card">
                                <div class="el-card-item">
                                    <div class="el-card-avatar el-overlay-1"> 
                                        <img src="'.base_url().$row->path.'" alt="user" />
                                        <div class="el-overlay">
                                            <ul class="list-style-none el-info">
                                                <li class="el-item">
                                                    <a class="btn btn-danger btn-outline el-link" href="#" onClick="confirmDelete(\''.$row->id.'\')">
                                                        <i class="fa fa-trash"></i>
                                                    </a
                                                ></li>
                                            </ul>
                                        </div>
                                    </div>
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
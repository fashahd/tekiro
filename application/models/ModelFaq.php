<?php
	class ModelFaq extends CI_Model {
		
        function getFAQ(){
            $sql = "SELECT * FROM `tekiro_faq` ORDER BY created_date desc";
            $query  = $this->db->query($sql);
            $ret = "";
            if($query->num_rows()>0){
                foreach($query->result() as $row){
					if($this->session->userdata('site_lang') == "indonesia"){
						$row->title = $row->title_id;
						$row->content = $row->content_id;
					}
                    $ret .='
					<div class="vc_row wpb_row vc_inner vc_row-fluid">
						<div class="wpb_column vc_column_container vc_col-sm-1">
							<div class="vc_column-inner ">
								<div class="wpb_wrapper"></div>
							</div>
						</div>
						<div class="wpb_column vc_column_container vc_col-sm-10">
							<div class="vc_column-inner ">
								<div class="wpb_wrapper">
									<div  class="vc_toggle vc_toggle_default vc_toggle_color_default  vc_toggle_size_md">
										<div class="vc_toggle_title" onClick="displayfaq(\''.$row->id.'\')">
											<h4>'.$row->title.'</h4>
											<i class="vc_toggle_icon"></i>
										</div>
										<div class="vc_toggle_content" id="togle_'.$row->id.'">
											'.$row->content.'
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="wpb_column vc_column_container vc_col-sm-1">
							<div class="vc_column-inner ">
								<div class="wpb_wrapper"></div>
							</div>
						</div>
					</div>
                    ';
				}
				$ret .= '
					
					<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
					<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
					
					<script type="text/javascript">
						function displayfaq(id){
							$("#togle_"+id).toggle();
						}
					</script>
				';
            }else{
                $ret = "";
            }
            return $ret;
        }
	}
?>
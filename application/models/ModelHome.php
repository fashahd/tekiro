<?php
	class ModelHome extends CI_Model {
        function getFooterSocial(){
            $sql = "SELECT * FROM tekiro_social";
            $query  = $this->db->query($sql);
            $ret = "";
            if($query->num_rows()>0){
                foreach($query->result() as $row){
                    $ret .='
                    <div class="col medium-3 small-12 large-3"  >
                        <div class="col-inner box-shadow-1 box-shadow-3-hover"  >
                            <div class="banner has-hover" id="banner-'.$row->id.'">
                                <div class="banner-inner fill">
                                    <div class="banner-bg fill" >
                                        <div class="bg fill bg-fill "></div>																		
                                        <div class="is-border" style="border-color:rgb(13, 177, 75);border-width:5px 5px 5px 5px;"></div>
                                    </div><!-- bg-layers -->
                                    <div class="banner-layers container">
                                        <a href="'.$row->url.$row->username.'/" target="_blank" class="fill">
                                            <div class="fill banner-link"></div>
                                        </a>
                                        <div id="text-box-1537388520" class="text-box banner-layer x50 md-x50 lg-x50 y50 md-y50 lg-y50 res-text">
                                            <div class="text dark">												  
                                                <div class="text-inner text-center">
                                                    <a href="'.$row->url.$row->username.'/" target="_blank" class="button white is-underline is-xxlarge lowercase expand"  >
                                                        <i class="'.$row->fa_icon.'" ></i>  
                                                        <span>@'.$row->username.'</span>
                                                    </a>
                                                </div>
                                            </div><!-- text-box-inner -->
                                                    
                                            <style scope="scope">

                                            #text-box-1537388520 {
                                                width: 77%;
                                            }
                                            #text-box-1537388520 .text {
                                                font-size: 100%;
                                            }
                                            </style>
                                        </div><!-- text-box -->
                                    </div><!-- .banner-layers -->
                                </div><!-- .banner-inner -->

                                    
                                <style scope="scope">

                                #banner-'.$row->id.' {
                                    padding-top: 60px;
                                    background-color: '.$row->background.';
                                }
                                </style>
                            </div><!-- .banner -->
                        </div>
                    </div>
                    ';
                }
            }else{
                $ret = "";
            }
            return $ret;
        }
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
        function getCategory(){
            $sql = "SELECT * FROM tekiro_category";
            $query  = $this->db->query($sql);
            $ret = "";
            if($query->num_rows()>0){
                foreach($query->result() as $row){
                    if($this->session->userdata('site_lang') == "indonesia"){
                        $row->title     = $row->title_id;
                        $row->subtitle  = $row->subtitle_id;
                    }
                    $ret .='                    
						<div class="col medium-4 small-12 large-4"  >
							<div class="col-inner">
								<div class="banner has-hover bg-zoom bg-zoom" id="banner-'.$row->id.'">
									<div class="banner-inner fill">
										<div class="banner-bg fill">
											<div class="bg fill bg-fill  bg-loaded"></div>                                                      
										</div>
										<div class="banner-layers container">
											<div class="fill banner-link"></div>            
											<div id="text-box-691486452" class="text-box banner-layer x50 md-x50 lg-x50 y10 md-y10 lg-y10 res-text">
												<div class="text dark">
													<div class="text-inner text-center">
														<h2 class="uppercase"><strong>'.$row->title.'</strong></h2>
														<h4 class="uppercase">'.$row->subtitle.'</h4>
														<a href="'.base_url().'products/" target="_self" class="button white is-outline"  >
															<span>'.$this->lang->line('see_more').'</span>
														</a>
													</div>
												</div><!-- text-box-inner -->
											
												<style scope="scope">

												#text-box-691486452 {
												  width: 80%;
												}
												#text-box-691486452 .text {
												  font-size: 100%;
												}
												</style>
											</div><!-- text-box --> 
										</div><!-- .banner-layers -->
									</div><!-- .banner-inner -->
							
									<style scope="scope">

									#banner-'.$row->id.' {
									  padding-top: 400px;
									}
									#banner-'.$row->id.' .bg.bg-loaded {
									  background-image: url('.base_url()."admin/".$row->path.');
									}
									#banner-'.$row->id.' .bg {
									  background-position: 100% 100%;
									}
									</style>
								</div><!-- .banner -->
							</div>
						</div>
                    ';
                }
            }else{
                $ret = "";
            }
            return $ret;
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
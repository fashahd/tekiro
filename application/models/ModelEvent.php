<?php
	class ModelEvent extends CI_Model {

        function getEventByID($slug = null){
            $sql    = " SELECT * FROM `tekiro_event` where slug = ?";
            $query  = $this->db->query($sql,array($slug));
            $ret    = "";
			$arrcategory = array(
				"automotive" => "Automotive",
				"sponsorship" => "Sponsorship"
			);
            if($query->num_rows()>0){
				$row = $query->row();				
				$date   = date("d", strtotime($row->created_date));
				$month  = date("m", strtotime($row->created_date));
				$year   = date("Y", strtotime($row->created_date));
				if($this->session->userdata('site_lang') == "indonesia"){
					$row->title = $row->title_id;
					$row->content = $row->content_id;
                }
				$ret .= '
					<div class="page-title blog-featured-title featured-title no-overflow">
						<div class="page-title-bg fill">
							<div class="title-bg fill bg-fill bg-top parallax-active" 
								style="background-image: url(&quot;'.base_url().'admin/'.$row->image_event.'&quot;); height: 306.222px; transform: translate3d(0px, -11px, 0px); backface-visibility: hidden;" data-parallax-fade="true" 
								data-parallax="-2" data-parallax-background="" data-parallax-container=".page-title">
							</div>
							<div class="title-overlay fill" style="background-color: rgba(0,0,0,.5)"></div>
						</div>
						<div class="page-title-inner container  flex-row  dark is-large" style="min-height: 300px">
							<div class="flex-col flex-center text-center">
								<h6 class="entry-category is-xsmall">
									<a href="'.base_url().'event/category/'.$row->category.'" rel="category tag">'.$arrcategory[$row->category].'</a>
								</h6>
								<h1 class="entry-title">'.$row->title.'</h1>
								<div class="entry-divider is-divider small"></div>
								<div class="entry-meta uppercase is-xsmall">
									<span class="posted-on">Posted on 
										<a href="'.base_url().'evevt/'.$row->slug.'" rel="bookmark">
											<time class="entry-date published" datetime="'.$row->created_date.'">'.$date.' '.$this->getBulan($month).' '.$year.'</time>
											<time class="updated" datetime="'.$row->created_date.'">'.$date.' '.$this->getBulan($month).' '.$year.'</time>
										</a>
									</span>
								</div><!-- .entry-meta -->
							</div>
						</div><!-- flex-row -->
					</div>
					<main id="main" class="">
						<div id="content" class="blog-wrapper blog-single page-wrapper">		
							<div class="row align-center">
								<div class="large-10 col">
									<article id="post-3224" class="post-3224 post type-post status-publish format-standard has-post-thumbnail hentry category-automotive">
										<div class="article-inner has-shadow box-shadow-2 box-shadow-3-hover">
											<div class="entry-content single-page">
												'.$row->content.'
												<div class="blog-share text-center">
													<div class="is-divider medium"></div>
													<div class="social-icons share-icons share-row relative icon-style-outline ">
														<a href="whatsapp://send?text=TEKIRO%2520Truck%2520Mobile%2520Display%2520%2526%25238211%253B%2520Roadshow%2520Schedule%20-%20https%3A%2F%2Ftekiro.com%2Ftekiro-truck-mobile-display-2%2F" data-action="share/whatsapp/share" class="icon button circle is-outline tooltip whatsapp show-for-medium tooltipstered"><i class="fa fa-phone"></i></a>
														<a href="//www.facebook.com/sharer.php?u=https://tekiro.com/tekiro-truck-mobile-display-2/" data-label="Facebook" onclick="window.open(this.href,this.title,width=500,height=500,top=300px,left=300px);  return false;" rel="nofollow" target="_blank" class="icon button circle is-outline tooltip facebook tooltipstered"><i class="fa fa-facebook"></i></a>
														<a href="//twitter.com/share?url=https://tekiro.com/tekiro-truck-mobile-display-2/" onclick="window.open(this.href,this.title,width=500,height=500,top=300px,left=300px);  return false;" rel="nofollow" target="_blank" class="icon button circle is-outline tooltip twitter tooltipstered"><i class="fa fa-twitter"></i></a>
														<a href="//plus.google.com/share?url=https://tekiro.com/tekiro-truck-mobile-display-2/" target="_blank" class="icon button circle is-outline tooltip google-plus tooltipstered" onclick="window.open(this.href,this.title,width=500,height=500,top=300px,left=300px);  return false;" rel="nofollow"><i class="fa fa-google-plus"></i></a>
													</div>								
												</div>
											</div>
											<footer class="entry-meta text-left">
												This entry was posted in 
												<a href="https://tekiro.com/category/automotive/" rel="category tag">
													Automotive
												</a>. 
												Bookmark the 
												<a href="https://tekiro.com/tekiro-truck-mobile-display-2/" title="Permalink to TEKIRO Truck Mobile Display – Roadshow Schedule" rel="bookmark">
													permalink
												</a>.
											</footer>
										</div><!-- .article-inner -->
									</article>
									<div id="comments" class="comments-area"></div><!-- #comments -->
								</div> <!-- .large-9 -->
							</div><!-- .row -->
						</div><!-- #content .page-wrapper -->
					</main>
				';
            }

            return $ret;
        }

		function getEvent(){
            $sql    = " SELECT * FROM `tekiro_event` order by created_date desc";
            $query  = $this->db->query($sql);
            $ret    = "";
            if($query->num_rows()>0){
                $no = 1;
                foreach($query->result() as $row){
                    $date   = date("d", strtotime($row->created_date));
                    $month  = date("m", strtotime($row->created_date));
					$year   = date("Y", strtotime($row->created_date));
					if($this->session->userdata('site_lang') == "indonesia"){
						$row->title = $row->title_id;
					}
                    $ret .= '                        
                    <div class="vc_col-lg-4 vc_visible-item">
                        <div class="vc_grid-item-mini vc_clearfix">
                            <div class="flip-card">
                                <div class="flip-card-inner">
                                    <div class="flip-card-front">
                                        <div class="vc_gitem-zone vc_gitem-zone-a vc-gitem-zone-height-mode-auto vc-gitem-zone-height-mode-auto-16-9 vc_gitem-is-link" style="background-image: url('.base_url().'admin/'.$row->image_event.') !important;">
                                            <a href="'.base_url().'event/'.$row->slug.'" title="'.$row->title.'" class="vc_gitem-link vc-zone-link"></a>	
                                            <img src="'.base_url().'admin/'.$row->image_event.'" class="vc_gitem-zone-img" alt="">	
                                            <div class="vc_gitem-zone-mini"></div>
                                        </div>
                                    </div>
                                    <div class="flip-card-back">
                                        <div class="text-body">
                                            <p style="text-align:center;font-size:11px">'.$date.' '.$this->getBulan($month).' '.$year.'</p>
                                            <div style="font-size: 24px;color: #0db14b;line-height: 1.3;text-align: center;font-family:Roboto;font-weight:700;font-style:normal">
                                                '.$row->title.'
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_clearfix"></div>
                    </div>
                    ';
                    $no++;
                }
            }
            return $ret;
        }
		
		function getBulan($month = null){
			
            $bulan = array(
                '01' => 'JANUARI',
                '02' => 'FEBRUARI',
                '03' => 'MARET',
                '04' => 'APRIL',
                '05' => 'MEI',
                '06' => 'JUNI',
                '07' => 'JULI',
                '08' => 'AGUSTUS',
                '09' => 'SEPTEMBER',
                '10' => 'OKTOBER',
                '11' => 'NOVEMBER',
                '12' => 'DESEMBER',
            );
			
			return $bulan[$month];
		}
    }
?>
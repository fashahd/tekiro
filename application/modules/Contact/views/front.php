<?php
	$sql = "SELECT * FROM `tekiro_department` ORDER BY id desc";
	$query  = $this->db->query($sql);
	$ret = "";
	if($query->num_rows()>0){
		foreach($query->result() as $row){
			$ret .='<option value="'.$row->slug.'">'.$row->title.'</option>';
		}
	}
?>
<main id="main" class="">
	<div id="content-contact" class="content-area page-wrapper" role="main">
		<div class="row row-main">
			<div class="large-12 col">
				<div class="col-inner">
					<div class="vc_row wpb_row vc_row-fluid vc_custom_1501532673163">
						<div class="wpb_column vc_column_container vc_col-sm-12">
							<div class="vc_column-inner ">
								<div class="wpb_wrapper">
									<div class="wpb_text_column wpb_content_element " >
										<div class="wpb_wrapper">
											<div class="container section-title-container" >
												<h3 class="section-title section-title-bold-center">
													<b></b>
													<span class="section-title-main" >
														<?=$this->lang->line('contact_title');?>
													</span>
													<b></b>
												</h3>
											</div><!-- .section-title -->
										</div>
									</div>
									<div class="vc_row wpb_row vc_inner vc_row-fluid vc_row-o-equal-height vc_row-o-content-top vc_row-flex">
										<div class="wpb_column vc_column_container vc_col-sm-6">
											<div class="vc_column-inner vc_custom_1501533492866">
												<div class="wpb_wrapper">
													<div role="form" class="wpcf7" id="wpcf7-f5-p2634-o1" lang="en-US" dir="ltr">
														<div class="screen-reader-response"></div>
														<form class="wpcf7-form mailchimp-ext-0.4.51" id="sendcontact">
															<div class="column one-third">
																<span class="wpcf7-form-control-wrap your-name">
																	<input required type="text" name="name" size="40" class="wpcf7-form-control" placeholder="<?=$this->lang->line('your_name');?>" />
																</span>
															</div>
															<div class="column one-third">
																<span class="wpcf7-form-control-wrap your-email">
																	<input required type="email" name="email" size="40" class="wpcf7-form-control" placeholder="<?=$this->lang->line('email');?>" />
																</span> 
															</div>
															<div class="column one-third">
																<span class="wpcf7-form-control-wrap ph">
																	<input required type="text" name="phone" size="40" class="wpcf7-form-control" placeholder="<?=$this->lang->line('contact_number');?>" />
																</span>
															</div>
															<div class="column one">
																<b><?=$this->lang->line('department');?> : </b>
																<span class="wpcf7-form-control-wrap departemen">
																	<select name="departemen" class="wpcf7-form-control">
																		<option value="">---</option>
																		<?=$ret?>
																	</select>
																</span>
															</div>
															<div class="column one">
																<span class="wpcf7-form-control-wrap your-subject">
																	<input required type="text" name="subject" size="40" class="wpcf7-form-control" placeholder="<?=$this->lang->line('subject');?>" />
																</span>
															</div>
															<div class="column one">
																<span class="wpcf7-form-control-wrap your-message">
																	<textarea required name="message" cols="40" rows="5" class="wpcf7-form-control" placeholder="<?=$this->lang->line('contact_title');?>..."></textarea>
																</span>
															</div>
															<div class="column one" id="btnsent">
																<input type="submit" value="<?=$this->lang->line('send_message');?>" class="wpcf7-form-control" />
															</div>
															<div class="wpcf7-response-output wpcf7-display-none"></div>
															<!-- Chimpmail extension by Renzo Johnson -->
														</form>
													</div>
												</div>
											</div>
										</div>
										<div class="wpb_column vc_column_container vc_col-sm-6"><div class="vc_column-inner "><div class="wpb_wrapper">
											<div class="wpb_text_column wpb_content_element " >
												<div class="wpb_wrapper">
													<?php if($this->session->userdata('site_lang') == "indonesia"){?>
													<p>Harap memilih departemen yang sesuai untuk memastikan pesan Anda mendapatkan respon yang cepat.</p>
													<p>Untuk informasi umum seputar produk dan wilayah penjualan, silahkan klik pada tautan berikut untuk terhubung langsung ke media sosial kami : <a href="https://m.me/TekiroTools/" target="_blank" rel="noopener"><strong>PERTANYAAN UMUM</strong></a></p>
													<p>Kami berusaha sebaik mungkin untuk memberikan rekomendasi yang akurat dan menjawab pertanyaan Anda sesegera mungkin. Terima kasih atas kesabaran dan kerjasamanya.</p>
													<p>Salam kami,<br />
													<?php }else{ ?>
													<p>Please select the department you want to reach accordingly to ensure quick response.</p>
													<p>For general info about products and sales territories, please click on the following link to connect directly to our social media : <a href="https://m.me/TekiroTools/" target="_blank" rel="noopener"><strong>GENERAL QUESTIONS</strong></a></p>
													<p>We try our best to provide accurate recommendations and answer to your enquiry as soon as possible. Thank you for your patience and cooperation.</p>
													<p>Regards,<br />
													<?php } ?>
													<img class="alignleft wp-image-2327" src="<?=base_url()?>appsources/image/logo-1.png" alt="" width="150" height="45" /></p>

												</div>
											</div>
										</div></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>							
				</div><!-- .col-inner -->
			</div><!-- .large-12 -->
		</div><!-- .row -->
	</div>
</main>
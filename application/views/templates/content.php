<?=$this->layout->headersource($module)?>
<body data-rsssl=1 class="home page-template page-template-page-transparent-header page-template-page-transparent-header-php page page-id-2643 full-width lightbox lazy-icons nav-dropdown-has-arrow wpb-js-composer js-comp-ver-5.1 vc_responsive">
	<a class="skip-link screen-reader-text" href="#main">Skip to content</a>
	<div id="wrapper">
		<header id="header" class="header transparent has-transparent">
			<div class="header-wrapper">
				<div id="masthead" class="header-main hide-for-sticky nav-dark">
					<div class="header-inner flex-row container logo-left" role="navigation">
                        <!-- Logo -->
					    <div id="logo" class="flex-col logo">
						    <!-- Header logo -->
                            <a href="<?=base_url()?>" title="TEKIRO® Tools - Believe in Your Choice" rel="<?=lcfirst($module)?>">
                            <img width="229" height="100" src="<?=base_url()?>appsources/image/logo.png" class="header_logo header-logo" alt="TEKIRO® Tools"/>
                            <img  width="229" height="100" src="<?=base_url()?>appsources/image/logo.png" class="header-logo-dark" alt="TEKIRO® Tools"/></a>
					    </div>
					    <!-- Mobile Left Elements -->
					    <div class="flex-col show-for-medium flex-left">
                            <ul class="mobile-nav nav nav-left ">
                                <li class="has-dropdown header-language-dropdown">
                                <a href="#">
                                    EN
                                    <i class="image-icon"><img src="<?=base_url()?>appsources/image/us.png"/></i>
                                    <i class="fa fa-angle-down" ></i>
                                </a>
                                <ul class="nav-dropdown nav-dropdown-default">
                                    <li>
										<a href="<?=base_url(); ?>LanguageSwitcher/switchLang/indonesia" hreflang="id">
											<i class="fa fa-image"><img src="<?=base_url()?>appsources/image/id.png"/></i>
											ID
										</a>
                                    </li>
                                    <li>
										<a href="<?=base_url(); ?>LanguageSwitcher/switchLang/english" hreflang="en">
											<i class="fa fa-image"><img src="<?=base_url()?>appsources/image/us.png"/></i>
											EN
										</a>
                                    </li>
                                </ul>
                                </li>
                            </ul>
					    </div>
                        <!-- Left Elements -->
                        <div class="flex-col hide-for-medium flex-left flex-grow">
                            <ul class="header-nav header-nav-main nav nav-left  nav-size-large nav-spacing-xlarge nav-uppercase" ></ul>
                        </div>
					    <!-- Right Elements -->
					    <div class="flex-col hide-for-medium flex-right">
							<?=$this->menu->top()?>
					    </div>
					    <!-- Mobile Right Elements -->
					    <div class="flex-col show-for-medium flex-right">
                            <ul class="mobile-nav nav nav-right ">
                                <li class="nav-icon has-icon">
									<a href="#" data-open="#main-menu" data-pos="center" data-bg="main-menu-overlay" data-color="dark" class="is-small" aria-controls="main-menu" aria-expanded="false">
										<i class="fa fa-align-justify" ></i>
									</a>
                                </li>
                            </ul>
					    </div>
					</div><!-- .header-inner -->
				</div><!-- .header-main -->
				<div class="header-bg-container fill">
                    <div class="header-bg-image fill"></div>
                    <div class="header-bg-color fill"></div>
				</div><!-- .header-bg-container -->   
			</div><!-- header-wrapper-->
		</header>
        <?=$this->load->view($pages)?>
	<footer id="footer" class="footer-wrapper">
		<div class="footer-widgets footer footer-1">
			<div class="row large-columns-1 mb-0">
				<div id="block_widget-5" class="col pb-0 widget block_widget">
					<section class="section dark" id="section_1528428793">
						<div class="bg section-bg fill bg-fill  bg-loaded" >
							<div class="is-border"
								style="border-color:rgb(13, 177, 75);border-width:2px 0px 0px 0px;">
							</div>
						</div><!-- .section-bg -->
						<div class="section-content relative">
							<div class="row row-collapse row-full-width align-middle"  id="row-1302591220">
								<div class="col medium-6 small-12 large-6"  >
									<div class="col-inner text-left" style="max-width:520px;padding:5% 5% 5% 0px;" >
										<?=$about?>
										<!-- <h3>ABOUT <span style="color: #0db14b;">TEKIRO TOOLS</span></h3>
										<p><strong>TEKIRO Tools</strong> is a trusted brand for high-quality hand tools product which provides wide range of product selections from industrial to home-use.</p>
										<p><strong>TEKIRO Tools</strong> is designed and produced to meet the needs of users in function,durability, comfortability and safety use.</p> -->
									</div>
								</div>
								<?=$award?>
							</div>
						</div><!-- .section-content -->
						<style scope="scope">
							#section_1528428793 {
								padding-top: 0px;
								padding-bottom: 0px;
								background-color: rgb(0,0,0);
							}
						</style>
					</section>
					<section class="section hide-for-small" id="section_1848601974">
						<div class="bg section-bg fill bg-fill  bg-loaded" ></div><!-- .section-bg -->
                        <div class="section-content relative">
                            <div class="row"  id="row-1883079169">
                                <div class="col small-12 large-12"  >
                                    <div class="col-inner"  >
                                        <div class="banner has-hover" id="banner-427889294">
                                            <div class="banner-inner fill">
                                                <div class="banner-bg fill" >
                                                    <div class="bg fill bg-fill "></div>
                                                </div><!-- bg-layers -->
                                                <div class="banner-layers container">
                                                    <div class="fill banner-link"></div>
                                                        <div id="text-box-298163773" class="text-box banner-layer x50 md-x50 lg-x50 y50 md-y50 lg-y50 res-text">
                                                            <div class="text dark">
                                                                <div class="text-inner text-center">
                                                                    <h2 style="text-align: center;"><span style="color: #0db14b;">
                                                                        <strong>Subscribe to </strong></span>
                                                                        <span style="color: #0db14b;"><strong>TEKIRO Tools </strong></span>
                                                                        <span style="color: #0db14b;"><strong>Newsletter</strong></span>
                                                                    </h2>
                                                                    <p style="text-align: center;">
                                                                        <span style="color: #ffffff;">Be the priority to get the latest updates on TEKIRO products, events and promotions.</span>
                                                                    </p>
                                                                    <p style="text-align: center;">
	                                                                    <section id="yikes-mailchimp-container-2" class="yikes-mailchimp-container yikes-mailchimp-container-2 ">
                                                                        <form id="footer-embed-en-2" class="yikes-easy-mc-form yikes-easy-mc-form-2 yikes-mailchimp-form-inline  footer-id" method="POST" data-attr-form-id="2">
													                        <label for="yikes-easy-mc-form-2-NAME"  class="label-inline NAME-label yikes-mailchimp-field-required ">
                                                                                <input id="yikes-easy-mc-form-2-NAME"  name="NAME"  placeholder="Full Name"  class="yikes-easy-mc-text field-no-label"  required="required" type="text"  value="">
                                                                            </label>
                                                                            <label for="yikes-easy-mc-form-2-EMAIL"  class="label-inline EMAIL-label yikes-mailchimp-field-required ">
                                                                                <input id="yikes-easy-mc-form-2-EMAIL"  name="EMAIL"  placeholder="Email Address"  class="yikes-easy-mc-email field-no-label"  required="required" type="email"  value="">
                                                                            </label>
                                                                            <input type="hidden" name="yikes-mailchimp-honeypot" id="yikes-mailchimp-honeypot" value="">
                                                                            <input type="hidden" name="yikes-mailchimp-associated-list-id" id="yikes-mailchimp-associated-list-id" value="def53f2e77">
                                                                            <input type="hidden" name="yikes-mailchimp-submitted-form" id="yikes-mailchimp-submitted-form" value="2">
                                                                            <label class="empty-form-inline-label submit-button-inline-label"><span class="empty-label labels-hidden">&nbsp;</span><button type="submit" class="yikes-easy-mc-submit-button yikes-easy-mc-submit-button-2 btn btn-primary footer-id-submit"> <span class="yikes-mailchimp-submit-button-span-text">Subscribe</span></button></label>				<!-- Nonce Security Check -->
                                                                            <input type="hidden" id="yikes_easy_mc_new_subscriber" name="yikes_easy_mc_new_subscriber" value="072601a14c" /><input type="hidden" name="_wp_http_referer" value="/" />
                                                                        </form>
                                                                    </p>
                                                                </section>
                                                            </div>
                                                        </div><!-- text-box-inner -->                            
                                                        <style scope="scope">
                                                            #text-box-298163773 {
                                                                width: 100%;
                                                                }
                                                                #text-box-298163773 .text {
                                                                font-size: 100%;
                                                                }


                                                                @media (min-width:550px) {

                                                                #text-box-298163773 .text {
                                                                    font-size: 77%;
                                                                }
                                                            }
                                                        </style>
                                                    </div>
                                                </div><!-- .banner-layers -->
                                            </div><!-- .banner-inner -->            
                                            <style scope="scope">
                                                #banner-427889294 {
                                                    padding-top: 175px;
                                                    background-color: rgb(0,0,0);
                                                }
                                            </style>
                                        </div><!-- .banner -->
                                    </div>
                                </div>
								<div class="col medium-3 small-12 large-3"  >
									<div class="col-inner box-shadow-1 box-shadow-3-hover"  >
										<div class="banner has-hover" id="banner-2001618292">
											<div class="banner-inner fill">
												<div class="banner-bg fill" >
													<div class="bg fill bg-fill "></div>																		
													<div class="is-border" style="border-color:rgb(13, 177, 75);border-width:5px 5px 5px 5px;"></div>
												</div><!-- bg-layers -->
												<div class="banner-layers container">
													<a href="https://www.facebook.com/TekiroTools/" target="_blank" class="fill">
														<div class="fill banner-link"></div>
													</a>
													<div id="text-box-1537388520" class="text-box banner-layer x50 md-x50 lg-x50 y50 md-y50 lg-y50 res-text">
														<div class="text dark">												  
															<div class="text-inner text-center">
																<a href="https://www.facebook.com/TekiroTools/" target="_blank" class="button white is-underline is-xxlarge lowercase expand"  >
																	<i class="fa fa-facebook" ></i>  
																	<span>@TekiroTools</span>
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

											#banner-2001618292 {
											  padding-top: 60px;
											  background-color: rgb(59, 89, 152);
											}
											</style>
										</div><!-- .banner -->
									</div>
								</div>
								<div class="col medium-3 small-12 large-3"  >
									<div class="col-inner box-shadow-1 box-shadow-3-hover"  >
										<div class="banner has-hover" id="banner-1646233552">
											<div class="banner-inner fill">
												<div class="banner-bg fill" >
													<div class="bg fill bg-fill "></div>																		
													<div class="is-border" style="border-color:rgb(13, 177, 75);border-width:5px 5px 5px 5px;"></div>
												</div><!-- bg-layers -->
												<div class="banner-layers container">
													<a href="https://www.facebook.com/TekiroTools/" target="_blank" class="fill">
														<div class="fill banner-link"></div>
													</a>
													<div id="text-box-1537388520" class="text-box banner-layer x50 md-x50 lg-x50 y50 md-y50 lg-y50 res-text">
														<div class="text dark">												  
															<div class="text-inner text-center">
																<a href="https://twitter.com/tekiro_tools" target="_blank" class="button white is-underline is-xxlarge lowercase expand"  >
																	<i class="fa fa-twitter" ></i>  
																	<span>@Tekiro_Tools</span>
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

											#banner-1646233552 {
												padding-top: 60px;
												background-color: rgb(0, 132, 180);
											}
											</style>
										</div><!-- .banner -->
									</div>
								</div>
								<div class="col medium-3 small-12 large-3"  >
									<div class="col-inner box-shadow-1 box-shadow-3-hover"  >
										<div class="banner has-hover" id="banner-457437803">
											<div class="banner-inner fill">
												<div class="banner-bg fill" >
													<div class="bg fill bg-fill "></div>																		
													<div class="is-border" style="border-color:rgb(13, 177, 75);border-width:5px 5px 5px 5px;"></div>
												</div><!-- bg-layers -->
												<div class="banner-layers container">
													<a href="https://www.facebook.com/TekiroTools/" target="_blank" class="fill">
														<div class="fill banner-link"></div>
													</a>
													<div id="text-box-1537388520" class="text-box banner-layer x50 md-x50 lg-x50 y50 md-y50 lg-y50 res-text">
														<div class="text dark">												  
															<div class="text-inner text-center">
																<a href="http://instagram.com/tekiro_tools" target="_blank" class="button white is-underline is-xxlarge lowercase expand"  >
																	<i class="fa fa-instagram" ></i>  
																	<span>@Tekiro_Tools</span>
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

											#banner-457437803 {
												padding-top: 60px;
												background-color: rgb(81, 127, 164);
											}
											</style>
										</div><!-- .banner -->
									</div>
								</div>
								<div class="col medium-3 small-12 large-3"  >
									<div class="col-inner box-shadow-1 box-shadow-3-hover"  >
										<div class="banner has-hover" id="banner-1249143283">
											<div class="banner-inner fill">
												<div class="banner-bg fill" >
													<div class="bg fill bg-fill "></div>																		
													<div class="is-border" style="border-color:rgb(13, 177, 75);border-width:5px 5px 5px 5px;"></div>
												</div><!-- bg-layers -->
												<div class="banner-layers container">
													<a href="https://www.facebook.com/TekiroTools/" target="_blank" class="fill">
														<div class="fill banner-link"></div>
													</a>
													<div id="text-box-1537388520" class="text-box banner-layer x50 md-x50 lg-x50 y50 md-y50 lg-y50 res-text">
														<div class="text dark">												  
															<div class="text-inner text-center">
																<a href="https://www.youtube.com/channel/UCsnPx6TfcXkTRD_dybyxJjA" target="_blank" class="button white is-underline is-xxlarge lowercase expand"  >
																	<i class="fa fa-instagram" ></i>  
																	<span>c/Tekiro_Tools</span>
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

											#banner-1249143283 {
												padding-top: 60px;
												background-color: rgb(187, 0, 0);
											}
											</style>
										</div><!-- .banner -->
									</div>
								</div>
							</div>
						</div><!-- .section-content -->      
						<style scope="scope">
							#section_1848601974 {
							  padding-top: 39px;
							  padding-bottom: 39px;
							  margin-bottom: 0px;
							  background-color: #0DB14B;
							}
						</style>
					</section>
					<div class="absolute-footer dark medium-text-center small-text-center">
						<div class="container clearfix">
							<div class="footer-primary pull-left">
								<div class="copyright-footer">
									© <?=date("Y")?> TEKIRO® Tools. All Rights Reserved.      
								</div>
							</div><!-- .left -->
						</div><!-- .container -->
					</div><!-- .absolute-footer -->
					<a href="#top" class="back-to-top button invert plain is-outline hide-for-medium icon circle fixed bottom z-1" id="top-link"><i class="fa fa-angle-up" ></i></a>
				</div>
			</div>
		</div>
	</footer><!-- .footer-wrapper -->
</div><!-- #wrapper -->

<!-- Mobile Sidebar -->
<div id="main-menu" class="mobile-sidebar no-scrollbar mfp-hide">
    <div class="sidebar-menu no-scrollbar text-center">
        <ul class="nav nav-sidebar nav-anim nav-vertical nav-uppercase">
              <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-2643 current_page_item menu-item-2645"><a href="https://tekiro.com/" class="nav-top-link">HOME</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2711"><a href="https://tekiro.com/products/" class="nav-top-link">PRODUCTS</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2646"><a href="https://tekiro.com/events/" class="nav-top-link">EVENTS</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2648"><a href="https://tekiro.com/contact/" class="nav-top-link">CONTACT</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3118"><a href="https://tekiro.com/faqs/" class="nav-top-link">FAQ</a></li>
<li class="lang-item lang-item-26 lang-item-id lang-item-first menu-item menu-item-type-custom menu-item-object-custom menu-item-2650-id">
	<a href="<?=base_url(); ?>LanguageSwitcher/switchLang/indonesia" class="nav-top-link"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAIAAAD5gJpuAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAFASURBVHjaYrwvyMzw6S8DGPwD0//ACAj+wNj/kNgAAcTC8P6vUF87UPr/v38M//79//v3/18g+Yfh35//v//++/vn/x8g+v3/N4hxe9YigABiYWAGG/biOQNI6V+wNBj9/f0PqOj3738g1b////rFLCUNtAEggFgY/jIAjYSo/gdWygBU8ec3iP37z7/fv0DsXyARxj9AOQaAAGIBOe7b179fPv3/85cBah5Q6a9/v8HafoOM//frF1CckYf3FwMDQACxCOSmctjY//34EeSef2AEchiY8QfsB4jlf/8yCwiKnT8LEECMf/+CguY/EDCAIW7AxMT0/v17gABi+ffvHyMjI0g9Az7VEFmgLwACiAmoAb9SNG0AAQSyAWgXRA8DDADtZEABQC5IFqgYIIBAGn78+PEPAhjAEAeAaAUIMAD/YnbumkL3sQAAAABJRU5ErkJggg==" title="ID" alt="ID" /></a></li>
<li class="html header-social-icons ml-0">
	    <div class="social-icons follow-icons " >
    	    	    	<a href="https://facebook.com/TekiroTools/" target="_blank" data-label="Facebook"  rel="nofollow" class="icon plain facebook tooltip" title="Follow on Facebook"><i class="fa fa-facebook" ></i>    	</a>
						    <a href="https://instagram.com/tekiro_tools/" target="_blank" rel="nofollow" data-label="Instagram" class="icon plain  instagram tooltip" title="Follow on Instagram"><i class="fa fa-instagram" ></i>		   </a>
							       <a href="https://twitter.com/tekiro_tools" target="_blank"  data-label="Twitter"  rel="nofollow" class="icon plain  twitter tooltip" title="Follow on Twitter"><i class="fa fa-twitter" ></i>	       </a>
																				     </div>

	</li>        </ul>
    </div><!-- inner -->
</div><!-- #mobile-menu -->
<?=$this->layout->headersourcejs()?>
</body>
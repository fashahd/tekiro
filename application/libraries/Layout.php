<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Layout {        
    
        public function content($view,$data = null){
            $CI =   &get_instance();
            $data["pages"]  = $view;
            $CI->load->view("templates/content",$data);
        }

        public function headersource($module = null){
            $actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $ret = '
            <head>
                <meta charset="UTF-8" />
                <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
                <link rel="profile" href="https://gmpg.org/xfn/11" />
                <title>TEKIRO® Tools &#8211; Believe in Your Choice</title>
                <link rel="dns-prefetch" href="//s.w.org" />
                <link rel="stylesheet" id="contact-form-7-css"  href="'.base_url().'appsources/css/styles.css" type="text/css" media="all" />
                <link rel="stylesheet" href="'.base_url().'appsources/fontawesome/css/font-awesome.min.css" type="text/css" media="all" />
                <link rel="stylesheet" id="dflip-style-css"  href="'.base_url().'appsources/css/dflip.css" type="text/css" media="all" />
                <link rel="stylesheet" id="flatsome-main-css"  href="'.base_url().'appsources/css/flatsome.css" type="text/css" media="all" />
                <link rel="stylesheet" id="flatsome-style-css"  href="'.base_url().'appsources/css/custom.css" type="text/css" media="all" />
                <script type="text/javascript" data-cfasync="false" src="'.base_url().'appsources/js/jquery.js"></script>
                <script type="text/javascript" src="'.base_url().'appsources/js/jquery-migrate.min.js"></script>
                
                <link rel="canonical" href="'.base_url().'" />
                <link rel="shortlink" href="'.base_url().'" />
                <style>.bg{opacity: 0; transition: opacity 1s; -webkit-transition: opacity 1s;} .bg-loaded{opacity: 1;}</style>
                <script type="text/javascript">
                    WebFontConfig = {
                    google: { families: [ "Lato:regular,700","Lato:regular,400","Noto+Sans:regular,700","Dancing+Script", ] }
                    };
                    (function() {
                    var wf = document.createElement("script");
                    wf.src = "https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js";
                    wf.type = "text/javascript";
                    wf.async = "true";
                    var s = document.getElementsByTagName("script")[0];
                    s.parentNode.insertBefore(wf, s);
                    })();
                </script>
                <link rel="alternate" href="'.base_url().'id/" hreflang="id" />
                <link rel="alternate" href="'.base_url().'" hreflang="en" />
                <link rel="icon" href="'.base_url().'appsources/image/favicon-196x196-150x150.png" sizes="32x32" />
                <link rel="icon" href="'.base_url().'appsources/image/favicon-196x196.png" sizes="192x192" />
                <link rel="apple-touch-fa fa-precomposed" href="'.base_url().'appsources/image/favicon-196x196.png" />
                <meta name="msapplication-TileImage" content="'.base_url().'appsources/image/favicon-196x196.png" />
            
                <!-- BEGIN GADWP v5.3.1.1 Universal Analytics - https://deconf.com/google-analytics-dashboard-wordpress/ -->
                <script>
                    (function(i,s,o,g,r,a,m){i["GoogleAnalyticsObject"]=r;i[r]=i[r]||function(){
                        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                    })(window,document,"script","https://www.google-analytics.com/analytics.js","ga");
                    ga("create", "UA-78225173-1", "auto");
                    ga("send", "pageview");
                </script>
                <!-- END GADWP Universal Analytics -->
                <style id="custom-css" type="text/css">:root {--primary-color: #0DB14B;}/* Site Width */.header-main{height: 100px}#logo img{max-height: 100px}#logo{width:229px;}.header-bottom{min-height: 10px}.header-top{min-height: 30px}.transparent .header-main{height: 102px}.transparent #logo img{max-height: 102px}.has-transparent + .page-title:first-of-type,.has-transparent + #main > .page-title,.has-transparent + #main > div > .page-title,.has-transparent + #main .page-header-wrapper:first-of-type .page-title{padding-top: 102px;}.transparent .header-wrapper{background-color: #000000!important;}.transparent .top-divider{display: none;}.header.show-on-scroll,.stuck .header-main{height:60px!important}.stuck #logo img{max-height: 60px!important}.search-form{ width: 75%;}.header-bg-color, .header-wrapper {background-color: #0A0A0A}.header-bottom {background-color: #f1f1f1}.header-main .nav > li > a{line-height: 16px }.stuck .header-main .nav > li > a{line-height: 52px }.header-bottom-nav > li > a{line-height: 16px }@media (max-width: 549px) {.header-main{height: 60px}#logo img{max-height: 60px}}.main-menu-overlay{background-color: #0DB14B}.nav-dropdown{font-size:100%}.blog-wrapper{background-color: #0DB14B;}/* Color */.accordion-title.active, .has-fa fa-bg .icon .fa fa-inner,.logo a, .primary.is-underline, .primary.is-link, .badge-outline .badge-inner, .nav-outline > li.active> a,.nav-outline >li.active > a, .cart-icon strong,[data-color="primary"], .is-outline.primary{color: #0DB14B;}/* Color !important */[data-text-color="primary"]{color: #0DB14B!important;}/* Background */.scroll-to-bullets a,.featured-title, .label-new.menu-item > a:after, .nav-pagination > li > .current,.nav-pagination > li > span:hover,.nav-pagination > li > a:hover,.has-hover:hover .badge-outline .badge-inner,button[type="submit"], .button.wc-forward:not(.checkout):not(.checkout-button), .button.submit-button, .button.primary:not(.is-outline),.featured-table .title,.is-outline:hover, .has-icon:hover .fa fa-label,.nav-dropdown-bold .nav-column li > a:hover, .nav-dropdown.nav-dropdown-bold > li > a:hover, .nav-dropdown-bold.dark .nav-column li > a:hover, .nav-dropdown.nav-dropdown-bold.dark > li > a:hover, .is-outline:hover, .tagcloud a:hover,.grid-tools a, input[type="submit"]:not(.is-form), .box-badge:hover .box-text, input.button.alt,.nav-box > li > a:hover,.nav-box > li.active > a,.nav-pills > li.active > a ,.current-dropdown .cart-icon strong, .cart-icon:hover strong, .nav-line-bottom > li > a:before, .nav-line-grow > li > a:before, .nav-line > li > a:before,.banner, .header-top, .slider-nav-circle .flickity-prev-next-button:hover svg, .slider-nav-circle .flickity-prev-next-button:hover .arrow, .primary.is-outline:hover, .button.primary:not(.is-outline), input[type="submit"].primary, input[type="submit"].primary, input[type="reset"].button, input[type="button"].primary, .badge-inner{background-color: #0DB14B;}/* Border */.nav-vertical.nav-tabs > li.active > a,.scroll-to-bullets a.active,.nav-pagination > li > .current,.nav-pagination > li > span:hover,.nav-pagination > li > a:hover,.has-hover:hover .badge-outline .badge-inner,.accordion-title.active,.featured-table,.is-outline:hover, .tagcloud a:hover,blockquote, .has-border, .cart-icon strong:after,.cart-icon strong,.blockUI:before, .processing:before,.loading-spin, .slider-nav-circle .flickity-prev-next-button:hover svg, .slider-nav-circle .flickity-prev-next-button:hover .arrow, .primary.is-outline:hover{border-color: #0DB14B}.nav-tabs > li.active > a{border-top-color: #0DB14B}/* Fill */.slider .flickity-prev-next-button:hover svg,.slider .flickity-prev-next-button:hover .arrow{fill: #0DB14B;}/* Background Color */[data-fa fa-label]:after, .secondary.is-underline:hover,.secondary.is-outline:hover,.fa fa-label,.button.secondary:not(.is-outline),.button.alt:not(.is-outline), .badge-inner.on-sale, .button.checkout, .single_add_to_cart_button{ background-color:#333333; }/* Color */.secondary.is-underline,.secondary.is-link, .secondary.is-outline,.stars a.active, .star-rating:before, .woocommerce-page .star-rating:before,.star-rating span:before, .color-secondary{color: #333333}/* Color !important */[data-text-color="secondary"]{color: #333333!important;}/* Border */.secondary.is-outline:hover{border-color:#333333}.success.is-underline:hover,.success.is-outline:hover,.success{background-color: #0DB14B}.success-color, .success.is-link, .success.is-outline{color: #0DB14B;}.success-border{border-color: #0DB14B!important;}@media screen and (max-width: 549px){body{font-size: 100%;}}body{font-family:"Lato", sans-serif}body{font-weight: 400}.nav > li > a {font-family:"Noto Sans", sans-serif;}.nav > li > a {font-weight: 700;}h1,h2,h3,h4,h5,h6,.heading-font, .off-canvas-center .nav-sidebar.nav-vertical > li > a{font-family: "Lato", sans-serif;}h1,h2,h3,h4,h5,h6,.heading-font,.banner h1,.banner h2{font-weight: 700;}h1,h2,h3,h4,h5,h6,.heading-font{color: #0DB14B;}.alt-font{font-family: "Dancing Script", sans-serif;}.header:not(.transparent) .header-nav.nav > li > a {color: #FFFFFF;}.header:not(.transparent) .header-nav.nav > li > a:hover,.header:not(.transparent) .header-nav.nav > li.active > a,.header:not(.transparent) .header-nav.nav > li.current > a,.header:not(.transparent) .header-nav.nav > li > a.active,.header:not(.transparent) .header-nav.nav > li > a.current{color: #72BF44;}.header-nav.nav-line-bottom > li > a:before,.header-nav.nav-line-grow > li > a:before,.header-nav.nav-line > li > a:before,.header-nav.nav-box > li > a:hover,.header-nav.nav-box > li.active > a,.header-nav.nav-pills > li > a:hover,.header-nav.nav-pills > li.active > a{color:#FFF!important;background-color: #72BF44;}a{color: #4E657B;}a:hover{color: #0DB14B;}.tagcloud a:hover{border-color: #0DB14B;background-color: #0DB14B;}.is-divider{background-color: #0DB14B;}.badge-inner.new-bubble{background-color: #72BF44}.star-rating span:before,.star-rating:before, .woocommerce-page .star-rating:before{color: #72BF44}.header-main .social-icons,.header-main .cart-icon strong,.header-main .menu-title,.header-main .header-button > .button.is-outline,.header-main .nav > li > a > i:not(.fa fa-angle-down){color: #FFF200!important;}.header-main .header-button > .button.is-outline,.header-main .cart-icon strong:after,.header-main .cart-icon strong{border-color: #FFF200!important;}.header-main .header-button > .button:not(.is-outline){background-color: #FFF200!important;}.header-main .current-dropdown .cart-icon strong,.header-main .header-button > .button:hover,.header-main .header-button > .button:hover i,.header-main .header-button > .button:hover span{color:#FFF!important;}.header-main .menu-title:hover,.header-main .social-icons a:hover,.header-main .header-button > .button.is-outline:hover,.header-main .nav > li > a:hover > i:not(.fa fa-angle-down){color: #72BF44!important;}.header-main .current-dropdown .cart-icon strong,.header-main .header-button > .button:hover{background-color: #72BF44!important;}.header-main .current-dropdown .cart-icon strong:after,.header-main .current-dropdown .cart-icon strong,.header-main .header-button > .button:hover{border-color: #72BF44!important;}.footer-1{background-color: #000000}.footer-2{background-color: #0DB14B}.absolute-footer, html{background-color: #000000}.from_the_blog_excerpt {display:none}#masthead {background: url(https://tekiro.com/wp-content/uploads/top-border-img.gif) right bottom no-repeat;background-size:100%; }.fa fa-search {color:#000000;}.page-wrapper {padding-top:0;}.absolute-footer {background: url(https://tekiro.com/wp-content/uploads/bottom-border-img.png) right top no-repeat;background-size:100%;padding-top:20px;background-color:#000000}#mc4wp-form-1 > div.mc4wp-form-fields > p > input, #mc4wp-form-2 > div.mc4wp-form-fields > p > input {width:32%}.blog-wrapper {padding-top:10px}#wrapper > div > div.page-title-inner.container.flex-row.dark.is-large > div > div.entry-meta.uppercase.is-xsmall {display:none}#lp-book {background-color:#0DB14B;}.mfp-close {color:yellow}#thumbnails {display:none}#footer-embed-en-2 > label.empty-form-inline-label.submit-button-inline-label > button, #footer-embed-id-1 > label.empty-form-inline-label.submit-button-inline-label > button {padding: 0.5em;border: none;min-height: 2.4em;line-height: inherit;}#footer-embed-en-2,#footer-embed-id-1 {width:80%}#yikes-mailchimp-container-2 > p,#yikes-mailchimp-container-1 > p {background:none}#yikes-mailchimp-container-4, #yikes-mailchimp-container-3 {width:60%;min-width:300px}#product-4 > button,#produk-3 > button {padding:0;color:#fff}@media (max-width: 849px){html, body {max-width: 100%;overflow-x: hidden;}#footer-embed-en-2,#footer-embed-id-1 {width:100%}#yikes-mailchimp-container-4, #yikes-mailchimp-container-3 {width:100%;min-width:300px}.yikes-easy-mc-form label.label-inline{width: calc( 100% + 3% ) !important;}.yikes-easy-mc-form .submit-button-inline-label {width:100%}}@media (max-width: 549px){html, body {max-width: 100%;overflow-x: hidden;}#mc4wp-form-1 > div.mc4wp-form-fields > p > input, #mc4wp-form-2 > div.mc4wp-form-fields > p > input {width:90%}#masthead > div > div.flex-col.show-for-medium.flex-left {width:20%}#masthead > div > div.flex-col.show-for-medium.flex-left > ul > li > a > i.image-icon {display:none}#footer-embed-en-2,#footer-embed-id-1 {width:100%}#yikes-mailchimp-container-4, #yikes-mailchimp-container-3 {width:100%;min-width:300px}.yikes-easy-mc-form .submit-button-inline-label {width:100% !important;}.yikes-easy-mc-form label.label-inline{width: calc( 100% + 3% ) !important;}}.label-new.menu-item > a:after{content:"New";}.label-hot.menu-item > a:after{content:"Hot";}.label-sale.menu-item > a:after{content:"Sale";}.label-popular.menu-item > a:after{content:"Popular";}</style>		
                <style type="text/css" id="wp-custom-css">			/*
                    Anda bisa menambahkan CSS di sini.
            
                    Klik ikon bantuan di atas untuk info lebih lanjut.
                    */
            
                    div.woocommerce-tabs.tabbed-content ,div.product_meta {display:none}
                </style>
                <style type="text/css" data-type="vc_custom-css">
                    #content {background-color:#0DB14B;}
                    .mejs-container .mejs-controls {display:none !important;}
                </style>
                <noscript>
                    <style type="text/css"> .wpb_animate_when_almost_visible { opacity: 1; }</style>
                </noscript>
            </head>
            ';

            return $ret;
        }

        function headersourcejs(){
            $ret = '
                <link rel="stylesheet" id="yikes-inc-easy-mailchimp-public-styles-css"  href="'.base_url().'appsources/css/yikes-inc-easy-mailchimp-extender-public.min.css" type="text/css" media="all" />
                <style id="yikes-inc-easy-mailchimp-public-styles-inline-css" type="text/css">
                .yikes-easy-mc-form label.label-inline {
                    float: left;
                    width: calc( 50% - 10% );
                    padding-right: 10px;
                }
                .yikes-easy-mc-form label.label-inline {
                    float: left;
                    width: calc( 50% - 10% );
                    padding-right: 10px;
                }		
                </style>
                <script type="text/javascript" src="'.base_url().'appsources/js/scripts.js"></script>
                <script type="text/javascript" src="'.base_url().'appsources/js/flatsome-live-search.js"></script>
                <script type="text/javascript" src="'.base_url().'appsources/js/dflip.js"></script>
                <script type="text/javascript" src="'.base_url().'appsources/js/hoverIntent.min.js"></script>
                <script type="text/javascript" src="'.base_url().'appsources/js/flatsome.js"></script>
                <script type="text/javascript" src="'.base_url().'appsources/js/wp-embed.min.js"></script>
                <script type="text/javascript" src="'.base_url().'appsources/js/yikes-mc-ajax-forms.min.js"></script>
                <script type="text/javascript" src="'.base_url().'appsources/js/form-submission-helpers.min.js"></script>
                <script type="text/javascript" src="'.base_url().'appsources/js/packery.pkgd.min.js"></script>
            
            ';
            return $ret;
        }
    }
?>
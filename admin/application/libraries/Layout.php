<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Layout {        
    
        public function content($view,$data = null){
            $CI =   &get_instance();
            $data["pages"]  = $view;
            $CI->load->view("templates/content",$data);
        }

        public function header($module = null){
            $actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $ret = '
            <head>
                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <!-- Tell the browser to be responsive to screen width -->
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <meta name="description" content="">
                <meta name="author" content="">
                <!-- Favicon icon -->
                <link rel="icon" type="image/png" sizes="16x16" href="'.base_url().'appsources/assets/images/favicon.png">
                <title>'.$module.'</title>
                <!-- chartist CSS -->
                <link href="'.base_url().'appsources/assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
                <link href="'.base_url().'appsources/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css" rel="stylesheet">
                <!--c3 CSS -->
                <link href="'.base_url().'appsources/assets/libs/morris.js/morris.css" rel="stylesheet">
                <link href="'.base_url().'appsources/assets/extra-libs/c3/c3.min.css" rel="stylesheet">
                <!-- Custom CSS -->
                <link href="'.base_url().'appsources/assets/libs/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet" />
                <link href="'.base_url().'appsources/assets/extra-libs/calendar/calendar.css" rel="stylesheet" />
                <!-- needed css -->
                <link href="'.base_url().'appsources/dist/css/style.min.css" rel="stylesheet">
                <link rel="stylesheet" href="'.base_url().'appsources/material-icons/css/materialdesignicons.min.css">
                <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
                <!-- WARNING: Respond.js doesnt work if you view the page via file:// -->
                <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
                <![endif]-->
            </head>
            ';

            return $ret;
        }

        function footer(){
            $ret = '            
                <!-- ============================================================== -->
                <!-- All Jquery -->
                <!-- ============================================================== -->
                <script src="'.base_url().'appsources/assets/libs/jquery/dist/jquery.min.js"></script>
                <!-- Bootstrap tether Core JavaScript -->
                <script src="'.base_url().'appsources/assets/libs/popper.js/dist/umd/popper.min.js"></script>
                <script src="'.base_url().'appsources/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
                <!-- apps -->
                <script src="'.base_url().'appsources/dist/js/app.min.js"></script>
                <script src="'.base_url().'appsources/dist/js/app.init.js"></script>
                <script src="'.base_url().'appsources/dist/js/app-style-switcher.js"></script>
                <!-- slimscrollbar scrollbar JavaScript -->
                <script src="'.base_url().'appsources/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
                <script src="'.base_url().'appsources/assets/extra-libs/sparkline/sparkline.js"></script>
                <!--Wave Effects -->
                <script src="'.base_url().'appsources/dist/js/waves.js"></script>
                <!--Menu sidebar -->
                <script src="'.base_url().'appsources/dist/js/sidebarmenu.js"></script>
                <!--Custom JavaScript -->
                <script src="'.base_url().'appsources/dist/js/custom.min.js"></script>
                <script src="'.base_url().'appsources/plugins/sweetalert/sweetalert.min.js"></script>
                <!-- This Page JS -->
                <script src="//cdn.ckeditor.com/4.11.4/full/ckeditor.js"></script>
                <script src="'.base_url().'appsources/apps/default.js"></script>
                <script src="'.base_url().'appsources/apps/custom.js"></script>
            ';
            return $ret;
        }
    }
?>
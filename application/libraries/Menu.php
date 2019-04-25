<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Menu {

        public function top($module = null){
            $CI     = &get_instance();
            $uri    = $CI->uri->segment(1);
            if($uri == ""){
                $uri = "home";
            }

            $arrmenu = array(
                "home" => "Home",
                "products" => "Products",
                "event"=>"Event",
                "contact"=>"Contact",
                "faq"=>"FAQ"
            );
            if($CI->session->userdata('site_lang') == "indonesia"){
                $arrmenu = array(
                    "home" => "Beranda",
                    "products" => "Produk",
                    "event"=>"Kegiatan",
                    "contact"=>"Kontak",
                    "faq"=>"FAQ"
                );
            }
            $retmenu = "";
            foreach($arrmenu as $value => $menu){
                if($value == $uri){
                    $slc = "current-menu-item page_item page-item-2643 current_page_item active";
                }else{
                    $slc = "";
                }
                $retmenu .= '
                    <li id="menu-item-'.$value.'" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-'.$value.' '.$slc.'">
                        <a href="'.base_url().''.$value.'" class="nav-top-link">'.$menu.'</a>
                    </li>
                ';
            }
            if($CI->session->userdata('site_lang') == "indonesia"){
                $lang = '
                <a href="'.base_url().'LanguageSwitcher/switchLang/english" class="nav-top-link">
                    <img src="'.base_url().'appsources/image/us.png" title="EN" alt="EN" />
                </a>
                ';
            }else{
                $lang = '
                <a href="'.base_url().'LanguageSwitcher/switchLang/indonesia" class="nav-top-link">
                    <img src="'.base_url().'appsources/image/id.png" title="ID" alt="ID" />
                </a>
                ';
            }
            $ret = '                
                <ul class="header-nav header-nav-main nav nav-right  nav-size-large nav-spacing-xlarge nav-uppercase">
                    '.$retmenu.'
                    <li id="menu-item-2650-id" class="lang-item lang-item-26 lang-item-id lang-item-first menu-item menu-item-type-custom menu-item-object-custom  menu-item-2650-id">
                        '.$lang.'
                    </li>
                </ul>
            ';

            return $ret;
        }
    }
?>
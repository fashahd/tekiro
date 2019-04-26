<?php
	class ModelProduct extends CI_Model {
        function getProduct(){
            $sql = "SELECT * FROM tekiro_product";
            $query  = $this->db->query($sql);
            $ret = "";
            $count = 1;
            if($query->num_rows()>0){
                foreach($query->result() as $row){
                    if($this->session->userdata('site_lang') == "indonesia"){
                        $row->title = $row->title_id;
                    }
                    if ($count%4 == 1)
                    {  
                        $ret .= '
                        <div class="vc_row wpb_row vc_row-fluid vc_custom_1501531592297 vc_row-has-fill">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1501544643346 vc_row-has-fill">
                                            <div class="wpb_column vc_column_container vc_col-sm-12 vc_hidden-lg vc_hidden-md">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vc_row wpb_row vc_inner vc_row-fluid vc_row-o-equal-height vc_row-o-content-bottom vc_row-flex">
                        ';
                    }

                    $ret .='
                    <div class="wpb_column vc_column_container vc_col-sm-3">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper">
                                <div class="wpb_text_column wpb_content_element " >
                                    <div class="wpb_wrapper">
                                        <p style="text-align: center;">
                                            <div class="_df_thumb " id="df_3148"  wpoptions=true thumb='.base_url().'admin/'.$row->image_path.' >
                                                '.$row->title.'
                                            </div>
                                            <script data-cfasync="false">var option_df_3148 = {"outline":[],"forceFit":"true","autoEnableOutline":"false","autoEnableThumbnail":"false","overwritePDFOutline":"false","direction":"1","pageMode":"0","source":"'.base_url().'admin/'.$row->pdf_path.'","wpOptions":"true"};</script>
                                        </p>
                                        <h2 style="text-align: center;">'.$row->title.'</h2>
                                        <p style="text-align: center;">
                                            <a href="'.base_url().'admin/'.$row->pdf_path.'" target="_blank" class="button primary is-primary is-medium"  >
                                                <span>DOWNLOAD &amp; PRINT</span>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    ';
                    if ($count%4 == 0)
                    {
                        $ret .= '
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ';
                    }
                    $count++;
                }
                if ($count%4 != 1) $ret .= '
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';
            }else{
                $ret = "";
            }
            return $ret;
        }
	}
?>
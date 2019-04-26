<?php
    list($id,$content,$content_id,$title,$title_id,$category,$image_event)=$event;
    $arrcategory = array(
        "automotive" => "Automotive",
        "sponsorship" => "Sponsorship"
    );
    
    $optcategory = "";
    foreach($arrcategory as $val => $ket){
        if($category == $val){
            $slct = "selected";
        }else{
            $slct = "";
        }
        $optcategory .= '<option '.$slct.' value="'.$val.'">'.$ket.'</option>';
    }
?>
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb border-bottom">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-xs-12 align-self-center">
                        <h5 class="font-medium text-uppercase mb-0"><?=$module?></h5>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="page-content container-fluid">
                <!-- ============================================================== -->
                <!-- Products yearly sales, Weather Cards Section  -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header bg-info">
                                <h4 class="mb-0 text-white">Edit Event</h4>
                            </div>
                            <form id="updateformEvent">
                                <div class="form-body">
                                    <div class="card-body">
                                        <div class="row pt-3">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Title | English</label>
                                                    <input value="<?=$title?>" required type="text" id="title" class="form-control" placeholder="Event Title">
                                                    <input value="<?=$id?>" required type="hidden" id="id" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Title | Indonesia</label>
                                                    <input value="<?=$title_id?>" required type="text" id="title_id" class="form-control" placeholder="Event Title">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row pt-3">
                                            <div class="col-md-6">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Category</label>
                                                    <select id="category" class="form-control custom-select">
                                                        <?=$optcategory?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <h5 >Event Image</h5>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Upload</span>
                                                    </div>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="event_image" name="event_image">
                                                        <label class="custom-file-label" for="event_image">Choose file</label>
                                                    </div>
                                                </div>
                                                <small id="textHelp" class="form-text text-muted">Max File Size 2MB</small>
                                            </div>
                                            <div class="col-lg-2">
                                                <img style="width:100%" src="<?=base_url().$image_event?>"/>
                                            </div>
                                        </div>
                                        <div class="row pt-3">
                                            <div class="col-md-12">
                                                <h5>Content | English</h5>
                                                <div class="form-group has-success">
                                                    <textarea name="content" class="form-control"><?=$content?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row pt-3">
                                            <div class="col-md-12">
                                                <h5>Content | Indonesia</h5>
                                                <div class="form-group has-success">
                                                    <textarea name="content_id" class="form-control"><?=$content_id?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress mt-3" style="height:13px;display:none">
                                        <div id="progressBar" class="progress-bar bg-success progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                            <span class="sr-only">0%</span>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-actions">
                                        <div class="card-body">
                                            <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                            <a href="<?=base_url()?>event" class="btn btn-dark">Cancel</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->

<script src="//cdn.ckeditor.com/4.11.4/full/ckeditor.js"></script>
<script>
CKEDITOR.replace( 'content' );
CKEDITOR.replace( 'content_id' );
</script>
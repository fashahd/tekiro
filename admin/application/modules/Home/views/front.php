<?php
    list($about,$about_id)=$content;
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
        <!-- Row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Footer</h4>
                    </div>
                    <div class="card-body">
                        <div class="row el-element-overlay">
                            <div class="col-lg-12">
                                <button data-toggle="modal" data-target="#responsive-modal" class="btn btn-primary"><i class="fa fa-upload"></i> Add Image</button>
                            </div><br><br><br>
                            <?=$award?>
                        </div>
                    </div>
                    <div id="responsive-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Add Image</h4>
                                </div>
                                <div class="modal-body">
                                    <form id="formupload">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="media" name="media">
                                                <label class="custom-file-label" for="media">Choose file</label>
                                            </div>
                                        </div>
                                        <small class="form-text text-muted">Max File Size : 2MB</small>
                                        <div class="progress mt-3" style="height:13px;display:none">
                                            <div id="progressBar" class="progress-bar bg-success progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                <span class="sr-only">0%</span>
                                            </div>
                                        </div>
                                        <br>
                                        <span type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Close</span>
                                        <button type="submit" class="btn btn-info waves-effect waves-light">Save changes</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form class="mt-4" id="footer-form">
                            <div class="row pt-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="footer">Content | English</label>
                                        <textarea id="footer" name="footer"><?=$about?></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="footer_id">Content | Indonesia</label>
                                        <textarea id="footer_id" name="footer_id"><?=$about_id?></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
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

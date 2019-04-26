<?php 
    list($id,$title,$title_id,$image_path,$pdf_path)=$product
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
            <div class="col-6">
                <div class="card border-right border-info">
                    <div class="card-header">
                        <h4 class="card-title float-left">Edit Product</h4>
                    </div>
                    <div class="card-body">
                        <form id="updateProduct">
                            <div class="form-group">
                                <label for="title">Title | English</label>
                                <input value="<?=$title?>" required type="text" class="form-control" id="title" placeholder="Title">
                                <input value="<?=$id?>" required type="hidden" class="form-control" id="id" placeholder="Title">
                            </div>
                            <div class="form-group">
                                <label for="title_id">Title | Indonesia</label>
                                <input value="<?=$title_id?>" required type="text" class="form-control" id="title_id" placeholder="Title">
                            </div>
                            <small class="form-text text-muted">Max File Size : 2MB</small>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Image Cover</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="media_cover" name="media_cover">
                                    <label class="custom-file-label" for="media_cover">Choose Cover</label>
                                </div>
                            </div>
                            <small class="form-text text-muted">Max File Size : 5MB</small>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">File PDF</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="media_pdf" name="media_pdf">
                                    <label class="custom-file-label" for="media_pdf">Choose File</label>
                                </div>
                            </div>
                            <div class="progress mt-3" style="height:13px;display:none">
                                <div id="progressBar" class="progress-bar bg-success progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                    <span class="sr-only">0%</span>
                                </div>
                            </div>
                            <br>
                            <a href="<?=base_url()?>product" class="btn btn-danger waves-effect" data-dismiss="modal">Back</a>
                            <button type="submit" class="btn btn-info waves-effect waves-light">Save changes</button>
                        </form>
                    </div>
                </div>
            </div>            
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title float-left">Image File</h4>
                    </div>
                    <img class="card-img-top img-responsive" src="<?=base_url().$image_path?>" alt="Not Found">
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title float-left">PDF File</h4>
                    </div>
                    <object data="<?=base_url().$pdf_path?>" type="application/pdf" width="100%" height="100%">
                        <p>Alternative text - include a link <a href="myfile.pdf">to the PDF!</a></p>
                    </object>
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

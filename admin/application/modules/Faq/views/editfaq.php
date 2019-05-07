<?php
    list($id,$title,$title_id,$content,$content_id)=$faq;
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
                <div class="card border-right border-info">
                    <div class="card-header">
                        <h4 class="card-title">Edit Category</h4>
                    </div>
                    <div class="card-body">
                        <form id="editFaq">
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label for="title">Title | English</label>
                                    <input value="<?=$title?>" required type="text" class="form-control" id="title" name="title" placeholder="Title">
                                    <input value="<?=$id?>" required type="hidden" class="form-control" id="id" name="id">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="title_id">Title | Indonesia</label>
                                    <input value="<?=$title_id?>" required type="text" class="form-control" id="title_id" name="title_id" placeholder="Title">
                                </div>
                                <div class="form-group col-lg-12">
                                    <label for="title_id">Content | English</label>
                                    <textarea name="content" class="form-control"><?=$content?></textarea>
                                </div>
                                <div class="form-group col-lg-12">
                                    <label for="title_id">Content | Indonesia</label>
                                    <textarea name="content_id" class="form-control"><?=$content_id?></textarea>
                                </div>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-info waves-effect waves-light">Save changes</button>
                            <a href="<?=base_url()?>faq" class="btn btn-danger waves-effect" data-dismiss="modal">Back</a>
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

<script src="//cdn.ckeditor.com/4.11.4/full/ckeditor.js"></script>
<script>
CKEDITOR.replace( 'content' );
CKEDITOR.replace( 'content_id' );
</script>
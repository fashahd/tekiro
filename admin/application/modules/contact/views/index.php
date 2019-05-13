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
                        <h4 class="card-title float-left"><?=$module?></h4>
                        <div class="float-right">
                            <button data-toggle="modal" data-target="#responsive-modal" class="btn btn-primary">
                                <i class="fa fa-plus"></i> Add Department
                            </button>
                        </div>
                        <div id="responsive-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                            <div class="modal-dialog modal-md">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Add Department</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form id="formDepartment">
                                            <div class="row">
                                                <div class="form-group col-lg-6">
                                                    <label for="title">Name | English</label>
                                                    <input required type="text" class="form-control" id="title" name="title" placeholder="Title">
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label for="title_id">Name | Indonesia</label>
                                                    <input required type="text" class="form-control" id="title_id" name="title_id" placeholder="Title">
                                                </div>
                                                <div class="form-group col-lg-12">
                                                    <label for="email">Email</label>
                                                    <input required type="email" class="form-control" id="email" name="email" placeholder="Email">
                                                </div>
                                            </div>
                                            <span type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Close</span>
                                            <button type="submit" class="btn btn-info waves-effect waves-light">Save changes</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <?=$faq?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <?php list($host,$port,$username,$password)=$smtp;?>
                <div class="card border-right border-info">
                    <div class="card-header">
                        <h4 class="card-title float-left"><?=$module?> SMTP</h4>
                    </div>
                    <div class="card-body">
                        <form id="formSMTP">
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label for="title">Host</label>
                                    <input value="<?=$host?>" required type="text" class="form-control" id="host" name="host" placeholder="Host / IP Address">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="title_id">Port</label>
                                    <input value="<?=$port?>" required type="text" class="form-control" id="port" name="port" placeholder="Port : 456">
                                </div>
                                <div class="form-group col-lg-12">
                                    <label for="email">Username</label>
                                    <input value="<?=$username?>" required type="email" class="form-control" id="email" name="email" placeholder="Username">
                                </div>
                                <div class="form-group col-lg-12">
                                    <label for="password">Password</label>
                                    <input value="<?=$password?>" required type="password" class="form-control" id="password" name="password" placeholder="Password">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-info waves-effect waves-light">Save changes</button>
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

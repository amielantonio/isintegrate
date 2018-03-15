<?php admin_get_header(); ?>
<?php admin_get_nav(); ?>
<?php admin_get_sidebar(); ?>
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?php echo asset( '/plugins/adminlte/bower_components/jvectormap/jquery-jvectormap.css' ) ?>">



    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">


        <!-- Main content -->
        <section class="content">

            <div class="row">

                <div class="col-sm-12">
                    <div class="box">
                        <div class="box-header">
                            <h1 class="box-title"><i class="fa fa-truck"></i> <?= isset( $supplier )? "Edit" : "Add New"?> Supplier</h1>

                        </div>
                        <!-- /.box-header -->

                        <form action="<?= isset( $supplier )? route( "supplier/{$supplier[0]['id']}/update" ) : route( 'supplier/store' ) ?>" method="post">

                            <div class="box-body">

                                <div class="form-group">

                                    <label for="supplier_name">Supplier name</label>
                                    <input type="text" class="form-control" id="supplier_name" name="supplier_name" value="<?= isset( $supplier )? $supplier[0]['supplier_name'] : ""?>">

                                </div>
                                <!-- /.form-group -->

                                <div class="form-group">

                                    <label for="contact">Contact Person</label>
                                    <input type="text" class="form-control" id="contact" name="contact" value="<?= isset( $supplier )? $supplier[0]['contact'] : ""?>">

                                </div>
                                <!-- /.form-group -->

                                <div class="form-group">

                                    <label for="contact_position">Position</label>
                                    <input type="text" class="form-control" id="contact_position" name="contact_position" value="<?= isset( $supplier )? $supplier[0]['contact_position'] : ""?>">

                                </div>
                                <!-- /.form-group -->

                                <div class="form-group">

                                    <label for="supplier_address">Supplier's Address</label>
                                    <input type="text" class="form-control" id="supplier_address" name="supplier_address" value="<?= isset( $supplier )? $supplier[0]['supplier_address'] : ""?>">

                                </div>
                                <!-- /.form-group -->

                                <div class="form-group">

                                    <label for="contact_info">Contact information</label>
                                    <input type="text" class="form-control" id="contact_info" name="contact_info" value="<?= isset( $supplier )? $supplier[0]['contact_info'] : ""?>">

                                </div>
                                <!-- /.form-group -->

                                <div class="form-group">

                                    <label for="email">Email Address</label>
                                    <input type="text" class="form-control" id="email" name="email" value="<?= isset( $supplier )? $supplier[0]['email'] : ""?>">

                                </div>
                                <!-- /.form-group -->

                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer">

                                <button type="submit" class="btn btn-primary">
                                    <?= isset( $supplier )? "Update" : "Save" ?> Supplier
                                </button>

                            </div>
                            <!-- /.box-footer -->

                        </form>
                    </div>
                </div>

            </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <!-- Sparkline -->
    <script src="<?php echo asset( '/plugins/adminlte/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js' )?>"></script>
    <!-- ChartJS -->
    <script src="<?php echo asset( '/plugins/adminlte/bower_components/Chart.js/Chart.js' )?>"></script>
    <!-- jvectormap  -->
    <script src="<?php echo asset( '/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js' ) ?>"></script>
    <script src="<?php echo asset( '/plugins/jvectormap/jquery-jvectormap-world-mill-en.js' ) ?>"></script>
<?php admin_get_footer(); ?>
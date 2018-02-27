<?php admin_get_header(); ?>
<?php admin_get_nav(); ?>
<?php admin_get_sidebar(); ?>
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?php echo asset( '/plugins/adminlte/bower_components/jvectormap/jquery-jvectormap.css' ) ?>">



    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <i class="fa fa-truck"></i> Supplier
            </h1>

        </section>

        <!-- Main content -->
        <section class="content">

            <div class="row">

                <div class="col-sm-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title"><?= isset( $supplier )? "Edit" : "Add New"?> Supplier</h3>

                            <div class="box-tools" style="display: flex">

                                <div class="input-group input-group-sm" style="width: 200px;">
                                    <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-header -->

                        <form action="<?= isset( $supplier )? route( "supplier/{$supplier['id']}/update" ) : route( 'supplier/store' ) ?>">

                            <div class="box-body">

                                <div class="form-group">

                                    <label for="supplier_name">Supplier name</label>
                                    <input type="text" class="form-control" id="supplier_name" name="supplier_name" value="<?= isset( $supplier )? $supplier['supplier_name'] : ""?>">

                                </div>
                                <!-- /.form-group -->

                                <div class="form-group">

                                    <label for="contact">Contact Person</label>
                                    <input type="text" class="form-control" id="contact" name="contact" value="<?= isset( $supplier )? $supplier['contact'] : ""?>">

                                </div>
                                <!-- /.form-group -->

                                <div class="form-group">

                                    <label for="contact_position">Position</label>
                                    <input type="text" class="form-control" id="contact_position" name="contact_position" value="<?= isset( $supplier )? $supplier['contact_position'] : ""?>">

                                </div>
                                <!-- /.form-group -->

                                <div class="form-group">

                                    <label for="supplier_address">Supplier's Address</label>
                                    <input type="text" class="form-control" id="supplier_address" name="supplier_address" value="<?= isset( $supplier )? $supplier['supplier_address'] : ""?>">

                                </div>
                                <!-- /.form-group -->

                                <div class="form-group">

                                    <label for="contact_info">Contact information</label>
                                    <input type="text" class="form-control" id="contact_info" name="contact_info" value="<?= isset( $supplier )? $supplier['contact_info'] : ""?>">

                                </div>
                                <!-- /.form-group -->

                                <div class="form-group">

                                    <label for="email_address">Email Address</label>
                                    <input type="text" class="form-control" id="supplier_name" name="supplier_name" value="<?= isset( $supplier )? $supplier['email'] : ""?>">

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
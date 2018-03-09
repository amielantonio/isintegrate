<?php admin_get_header(); ?>
<?php admin_get_nav(); ?>
<?php admin_get_sidebar(); ?>
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?php echo asset( '/plugins/adminlte/bower_components/jvectormap/jquery-jvectormap.css' ) ?>">
    <!-- Select2 -->
    <link rel="stylesheet" href="<?php echo asset( 'plugins/adminlte/bower_components/select2/dist/css/select2.min.css' ) ?>">



    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <i class="fa fa-file"></i> Warranty
            </h1>

        </section>

        <!-- Main content -->
        <section class="content">

            <div class="col-sm-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Add Warranty</h3>

                        <div class="box-tools" style="display: none">

                            <div class="input-group input-group-sm" style="width: 200px;">
                                <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                                <div class="input-group-btn">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-header -->


                    <form action="<?= isset( $warranty )? route( "warranty/{$warranty[0]['id']}/update" ) : route( 'warranty/store' ) ?>" method="post">

                        <div class="box-body">

                            <div class="form-group">

                                <label for="product_id">Product Name</label>
                                <select class="select2 form-control" id="product_id" name="product_id">
                                    <option value="<?= isset( $warranty )? $warranty[0]['id'] : ""?>"><?= isset( $warranty )? $warranty[0]['product_name'] : ""?></option>
                                    <?php foreach( $products as $key => $product) : ?>
                                        <option value="<?= $product['id'] ?>"><?= $product['product_name'] ?></option>
                                    <?php endforeach; ?>
                                </select>

                            </div>

                            <div class="form-group">

                                <label for="warranty_duration">Warranty Duration</label>
                                <select class="form-control" name="warranty_duration" id="warranty_duration">
                                    <option>1 Week</option>
                                    <option>1 Month</option>
                                    <option>6 Months</option>
                                    <option>1 Year</option>
                                    <option>2 Years</option>
                                </select>

                            </div>

                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">

                            <button type="submit" class="btn btn-primary">

                                <?= isset( $warranty )? "Update" : "Save"?> Warranty

                            </button>

                        </div>
                        <!-- /.box-footer -->


                    </form>
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

    <!-- Select2 -->
    <script src="<?php echo asset( 'plugins/adminlte/bower_components/select2/dist/js/select2.full.min.js' ) ?>"></script>
    <script>
        $ = jQuery;
        //Initialize Select2 Elements
        $('.select2').select2()
    </script>
<?php admin_get_footer(); ?>
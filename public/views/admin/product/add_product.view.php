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
                <i class="fa fa-cube"></i> Products
            </h1>

        </section>

        <!-- Main content -->
        <section class="content">

            <div class="row">

                <div class="col-sm-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Import Products</h3>
                        </div>

                        <form action="" method="post">
                            <div class="box-body">


                                <div class="form-group">

                                    <label for="import">
                                        File Import
                                    </label>

                                    <input type="file" name="import" class="form-control">

                                </div>

                            </div>
                            <!--END BOX BODY-->

                            <div class="box-footer">
                                <button type="button" class="btn btn-primary">Import</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Add New Product</h3>
                        </div>
                        <!-- /.box-header -->

                        <form action="" method="post">
                            <div class="box-body">



                                    <div class="form-group">
                                        <label for="sku">SKU</label>
                                        <input type="text" name="sku" id="product_name" class="form-control">
                                    </div>
                                    <!--END FORM GROUP-->

                                    <div class="form-group">
                                        <label for="product_name">Product Name</label>
                                        <input type="text" name="product_name" id="product_name" class="form-control">
                                    </div>
                                    <!--END FORM GROUP-->

                                    <div class="form-group">
                                        <label for="product_description">Product Description</label>
                                        <input type="text" name="product_description" id="product_description" class="form-control">
                                    </div>
                                    <!--END FORM GROUP-->

                                    <div class="form-group">
                                        <label for="product_type">Product Type</label>
                                        <select name="product_type" id="product_type" class="form-control">
                                            <option>Processor</option>
                                            <option>Case</option>
                                            <option>Cooling System</option>
                                            <option>Motherboard</option>
                                            <option>Peripherals</option>
                                        </select>
                                    </div>
                                    <!--END FORM GROUP-->

                                    <div class="form-group">
                                        <label for="price">Price</label>
                                        <input type="text" name="price" id="price" class="form-control">
                                    </div>
                                    <!--END FORM GROUP-->

                            </div>
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">
                                    Save Product
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
            <!--END ROW-->


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
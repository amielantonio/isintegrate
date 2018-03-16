<?php admin_get_header(); ?>
<?php admin_get_nav(); ?>
<?php admin_get_sidebar(); ?>
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?php echo asset( 'plugins/adminlte/bower_components/jvectormap/jquery-jvectormap.css' ) ?>/">



    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Main content -->
        <section class="content">

            <div class="row">

                <div class="col-sm-12">
                    <div class="box">
                        <div class="box-header">
                            <h1 class="box-title">
                                <i class="fa fa-shopping-cart"></i> Orders
                            </h1>

                            <div class="pull-right">

                                <span class="mr-20"><b>Total Gross Sales: </b> Php<?= $totalSales[0]['gross'] ?></span>

                                <b>Total Net Income: </b> Php<?= $totalSales[0]['gross'] - $totalSales[0]['total_unit']?>

                            </div>

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
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                                <tbody><tr>
                                    <th>#</th>
                                    <th>Product Name</th>
                                    <th>Product Brand</th>
                                    <th>Unit Price</th>
                                    <th>Selling Price</th>
                                    <th>Qty</th>
                                    <th>Amount</th>
                                </tr>


                                <?php $x = 1; foreach( $sales as $key=>$sale) : ?>
                                    <tr>
                                        <td><?= $x ?></td>
                                        <td>
                                            <a href="#">
                                                <?= $sale['product_name'] ?>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="#">
                                                <?= $sale['product_brand'] ?>
                                            </a>
                                        </td>
                                        <td><?= $sale['unit_price'] ?></td>
                                        <td><?= $sale['selling_price'] ?></td>
                                        <td><?= $sale['quantity'] ?></td>
                                        <td><?= $sale['amount'] ?></td>
                                    </tr>
                                    <?php $x++; endforeach; ?>

                                <tr>
                                    <th>#</th>
                                    <th>Product Name</th>
                                    <th>Product Brand</th>
                                    <th>Unit Price</th>
                                    <th>Selling Price</th>
                                    <th>Qty</th>
                                    <th>Amount</th>
                                </tr>
                                </tbody></table>
                        </div>



                        <div class="box-footer">

                            <div class="pull-right">

                                <span class="mr-20"><b>Total Gross Sales: </b> Php<?= $totalSales[0]['gross'] ?></span>

                                <b>Total Net Income: </b> Php<?= $totalSales[0]['gross'] - $totalSales[0]['total_unit']?>

                            </div>


                        </div>
                        <!-- /.box-body -->
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
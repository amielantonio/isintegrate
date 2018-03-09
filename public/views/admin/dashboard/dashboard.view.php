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
            <i class="fa fa-dashboard"></i> Dashboard
        </h1>

    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-sm-6">

                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">New Products</h3>

                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <ul class="products-list product-list-in-box">

                            <?php foreach( $products as $key => $product ) :?>
                            <li class="item">
                                <div class="product-img">
                                    <img src="<?php echo asset( $product['product_image'] )?>" alt="Product Image">
                                </div>
                                <div class="product-info">
                                    <a href="<?= route( "product/{$product['id']}/edit" );?>" class="product-title"><?= $product['product_name']?>
                                        <span class="label label-info pull-right">Php <?= $product['unit_price']?></span></a>
                                    <span class="product-description">
                                      <?= $product['product_description']?>
                                    </span>
                                </div>
                            </li>
                            <!-- /.item -->
                            <?php endforeach; ?>


                        </ul>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer text-center">
                        <a href="<?= route( 'product' );  ?>" class="uppercase">View All Products</a>
                    </div>
                    <!-- /.box-footer -->
                </div>

            </div>
            <!--END COLUMN-->

            <div class="col-sm-6">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Latest Purchases</h3>

                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table no-margin">
                                <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>Customer name</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php foreach( $orders as $key => $order) : ?>
                                <tr>
                                    <td><a href="<?= route( "order/{$order['order_id']}" )?>"><?= $order['order_id']?></a></td>
                                    <td>John doe</td>
                                    <td>
                                        <a href="#">
                                            <button type="button" class="btn btn-primary">View Transaction</button>
                                        </a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>

                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer text-center">
                        <a href="<?= route( 'order' ); ?>" class="uppercase">View All Transactions</a>
                    </div>
                    <!-- /.box-footer -->
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
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
                                <i class="fa fa-credit-card"></i> Sales
                            </h1>

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
                                    <th>OR ID</th>
                                    <th>Qty</th>
                                    <th>Amount</th>
                                    <th>Order Status</th>
                                    <th>Date Ordered</th>
                                    <th>Actions</th>
                                </tr>


                                <?php $x = 1; foreach( $orders as $key=>$order) : ?>
                                <tr>
                                    <td><?= $x ?></td>
                                    <td>
                                        <a href="#">
                                            <?= $order['order_id'] ?>
                                        </a>
                                    </td>
                                    <td><?= $order['quantity'] ?></td>
                                    <td><?= $order['amount'] ?></td>
                                    <td>
                                        <span class="label label-<?php if($order['order_status'] == 'Shipped'){ echo "info"; }elseif($order['order_status'] == 'Pending'){ echo "warning"; }else{ echo 'danger'; }  ?>">
                                            <?= $order['order_status'] ?>
                                        </span>
                                    </td>
                                    <td><?= date( 'F d, Y - h:i a', strtotime( $order['date_shipped'] )) ?></td>
                                    <td>
                                        <a href="<?= route( '' ) ?>">
                                            <button type="button" class="btn btn-primary">
                                                View
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                                <?php $x++; endforeach; ?>

                                <tr>
                                    <th>#</th>
                                    <th>OR ID</th>
                                    <th>Qty</th>
                                    <th>Amount</th>
                                    <th>Order Status</th>
                                    <th>Date Shipped</th>
                                    <th>Actions</th>
                                </tr>
                                </tbody></table>
                        </div>

                        <div class="box-footer clearfix">
                            <ul class="pagination pagination-sm no-margin pull-right">
                                <li><a href="#">«</a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">»</a></li>
                            </ul>
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
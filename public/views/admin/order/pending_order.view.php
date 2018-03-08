<?php admin_get_header(); ?>
<?php admin_get_nav(); ?>
<?php admin_get_sidebar(); ?>
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?php echo asset( 'plugins/adminlte/bower_components/jvectormap/jquery-jvectormap.css' ) ?>/">



    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <i class="fa fa-shopping-cart"></i> Pending Orders
            </h1>

        </section>

        <!-- Main content -->
        <section class="content">

            <div class="row">

                <div class="col-sm-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Pending orders list</h3>
                        </div>


                        <!-- /.box-header -->
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                                <tbody><tr>
                                    <th>#</th>
                                    <th>Order ID</th>
                                    <th>Customer Name</th>
                                    <th>Qty</th>
                                    <th>Amount</th>
                                    <th>Date Ordered</th>
                                    <th>Actions</th>
                                </tr>

                                <tr>
                                    <td>1</td>
                                    <td>
                                        <a href="#">
                                            OR12345
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#">
                                            PC Console
                                        </a>
                                    </td>
                                    <td>100</td>
                                    <td>Php 100,000.00</td>
                                    <td>Jan 01, 2018</td>
                                    <td>
                                        <a href="#">
                                            <button type="button" class="btn btn-primary">
                                                Shipped
                                            </button>
                                            <button type="button" class="btn btn-danger">
                                                Canceled
                                            </button>
                                        </a>
                                    </td>
                                </tr>


                                <tr>
                                    <th>#</th>
                                    <th>Order ID</th>
                                    <th>Customer Name</th>
                                    <th>Qty</th>
                                    <th>Amount</th>
                                    <th>Order Status</th>
                                    <th>Date Ordered</th>
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
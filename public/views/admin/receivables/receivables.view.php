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
                            <h1 class="box-title">
                                <i class="fa fa-pencil-square-o"></i> Inventory In
                            </h1>

                            <div class="box-tools" style="display: none">
                                <div class="input group input-group-sm mr-10">
                                    <select name="filter-type" id="" class="form-control pull-right">
                                        <option>Sort By</option>
                                        <option>Date</option>
                                        <option>Supplier</option>
                                    </select>

                                </div>

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
                                    <th>OR#</th>
                                    <th>No. of Items</th>
                                    <th>Amount of Purchased</th>
                                    <th>Date Received</th>
                                    <th>Actions</th>
                                </tr>

                                <?php foreach( $receivables as $key => $receivable ) : ?>

                                <tr>
                                    <td>
                                        <a href="<?= route( "receivable/{$receivable[ 'id' ]}" ) ?>">
                                            <?= $receivable[ 'receipt_number' ] ?>
                                        </a>
                                    </td>
                                    <td>
                                        <?= $receivable[ 'quantity' ]?>
                                    </td>

                                    <td>
                                        <b>Php <?= $receivable[ 'amount' ]?></b>
                                    </td>
                                    <td>
                                        <?= date( 'F m, Y', strtotime( $receivable['date_received']) )?>
                                    </td>
                                    <td>
                                        <div class="toolbar">
                                            <a href="<?= route( "receivable/{$receivable['id']}" ) ?>" class="toolbar-tool">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="<?= route( "receivable/{$receivable['id']}/destroy" ) ?>" class="toolbar-tool">
                                                <span class="text-danger"><i class="fa fa-trash"></i></span>
                                            </a>

                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach; ?>

                                <tr>
                                    <th>OR#</th>
                                    <th>No. of Items</th>
                                    <th>Amount of Purchased</th>
                                    <th>Date Received</th>
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
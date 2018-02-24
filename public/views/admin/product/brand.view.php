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
                <i class="fa fa-cubes"></i> Product Types
            </h1>

        </section>

        <!-- Main content -->
        <section class="content">

            <div class="row">

                <div class="col-sm-8">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Listing</h3>
                        </div>

                        <div class="box-body table-responsive no-padding">

                            <table class="table table-hover">
                                <tbody><tr>
                                    <th>#</th>
                                    <th>Brand</th>
                                    <th>Actions</th>
                                </tr>


                                <?php $x = 1;foreach( $brands as $key => $brand) : ?>
                                <tr>
                                    <td><?= $x ?></td>
                                    <td><?= $brand['brand_name']; ?></td>
                                    <td>
                                        <a href="<?= route( "product/brands/{$brand['id']}/destroy" ) ?>">
                                            <span class="text-danger"><i class="fa fa-trash"></i></span>
                                        </a>

                                    </td>
                                </tr>
                                <?php $x++; endforeach; ?>

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
                <!--END COLUMN-->

                <div class="col-sm-4">

                    <div class="box with-boarder box-info">

                        <div class="box-header">
                            <h3 class="box-title">Add New Brand</h3>
                        </div>

                        <div class="box-body">
                            <form method="POST" action="<?= route( 'product/brands/store' ) ?>" class="">

                                <div class="form-group">
                                    <label for="brand_name">Brand Name</label>
                                    <input type="text" name="brand_name" id="brand_name" class="form-control">
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>

                            </form>
                        </div>

                    </div>

                </div>
                <!--END COLUMN-->

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
<?php admin_get_header(); ?>
<?php admin_get_nav(); ?>
<?php admin_get_sidebar(); ?>
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?php echo asset( '/plugins/adminlte/bower_components/jvectormap/jquery-jvectormap.css' ) ?>">



    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <!-- Main content -->
        <section class="content">

            <div class="row">

                <div class="col-sm-8">
                    <div class="box">
                        <div class="box-header">
                            <h1 class="box-title">
                                <i class="fa fa-cubes"></i> Product Types
                            </h1>
                        </div>

                        <div class="box-body table-responsive no-padding">

                            <table class="table table-hover">
                                <tbody><tr>
                                    <th>ID</th>
                                    <th>Product Type</th>
                                    <th>Description</th>
                                    <th>Actions</th>
                                </tr>

                               <tr>
                                   <td>1</td>
                                   <td>Video Card</td>
                                   <td>This is to add more color to something</td>
                                   <td>delete</td>
                               </tr>

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
                <!--END COLUMN-->

                <div class="col-sm-4">

                    <div class="box with-boarder box-info">

                        <div class="box-header">
                            <h3 class="box-title">Add New Type</h3>
                        </div>

                        <div class="box-body">
                            <form method="POST" action="" class="">

                                <div class="form-group">
                                    <label for="reservation_category">Product Type</label>
                                    <input type="text" name="reservation_category" id="reservation_category" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="category_description">Description</label>
                                    <textarea id="category_description" class="form-control" name="category_description"></textarea>
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
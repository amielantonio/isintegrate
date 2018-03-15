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

                <div class="col-sm-12">
                    <div class="box">
                        <div class="box-header">
                            <h1 class="box-title">
                                <i class="fa fa-cube"></i> Products
                            </h1>

                            <div class="box-tools" style="display: none">
                                <div class="input group input-group-sm mr-10">
                                    <select name="filter-type" id="" class="form-control pull-right">
                                        <option>View only</option>
                                        <option>CPU</option>
                                        <option>Case</option>
                                        <option>Video Card</option>
                                        <option>Motherboard</option>
                                    </select>

                                </div>

                                <div class="input group input-group-sm mr-10">
                                    <select name="filter-type" id="" class="form-control pull-right">
                                        <option>Sort By</option>
                                        <option>SKU</option>
                                        <option>Name</option>
                                        <option>Date Added</option>
                                        <option>Price</option>
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
                                    <th>#</th>
                                    <th>Img</th>
                                    <th>Product Name</th>
                                    <th>Product Description</th>
                                    <th>SKU</th>
                                    <th>Product Type</th>
                                    <th>Selling Price</th>
                                    <th>Date Added</th>
                                    <th>Actions</th>
                                </tr>


                                <?php $x = 1; foreach( $products as $key => $product) : ?>

                                    <tr>
                                        <td><?= $x ?></td>
                                        <td>
                                            <img src="<?php echo asset( $product[ 'product_image' ] )?>" class="img-display img-display--table">
                                        </td>
                                        <td><?= $product[ 'product_name' ] ?></td>
                                        <td><?= $product[ 'product_description' ] ?></td>
                                        <td><?= ($product[ 'sku' ] <> "" ) ? $product[ 'sku' ] : "-" ?></td>
                                        <td><?= $product[ 'product_type' ] ?></td>
                                        <td><span>Php</span> <?= $product[ 'selling_price' ] ?></td>
                                        <td><?= date( 'm/d/Y', strtotime( $product['created_at'] ) ) ?></td>
                                        <td>
                                            <div class="toolbar">
                                                <a href="<?= route( "product/{$product['id']}" )?>" class="toolbar-tool">
                                                    <i class="fa fa-eye"></i>
                                                </a>

                                                <a href="<?= route( "product/{$product['id']}/edit" )?>" class="toolbar-tool">
                                                    <i class="fa fa-edit"></i>
                                                </a>


                                                <a href="<?= route( "product/{$product['id']}/destroy" )?>" class="toolbar-tool">
                                                    <span class="text-danger"><i class="fa fa-trash"></i></span>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>

                                <?php $x++; endforeach; ?>



                                <tr>
                                    <th>#</th>
                                    <th>Img</th>
                                    <th>Product Name</th>
                                    <th>Product Description</th>
                                    <th>SKU</th>
                                    <th>Product Type</th>
                                    <th>Selling Price</th>
                                    <th>Date Added</th>
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
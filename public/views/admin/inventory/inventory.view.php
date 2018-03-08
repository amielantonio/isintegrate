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
                <i class="fa fa-table"></i> Inventory
            </h1>

        </section>

        <!-- Main content -->
        <section class="content">

            <div class="row">

                <div class="col-sm-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Product Inventory</h3>

                            <div class="box-tools" style="display: flex">
                                <div class="input group input-group-sm mr-10">
                                    <select name="filter-type" id="" class="form-control pull-right">
                                        <option>Select Product Type</option>
                                        <option>Processor</option>
                                        <option>Case</option>
                                        <option>Video Card</option>
                                        <option>Motherboard</option>
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
                                    <th>Img</th>
                                    <th>Product Name</th>
                                    <th>SKU</th>
                                    <th>Stock</th>
                                    <th>Selling Price</th>
                                    <th>Product Type</th>
                                    <th>Date Updated</th>
                                    <th>Actions</th>
                                </tr>

                                <?php foreach($products as $key => $product) :   ?>
                                <tr>
                                    <td><img src="<?php echo asset( $product[ 'product_image' ] )?>" class="img-display img-display--table"></td>
                                    <td>
                                        <a href="<?= route( "product/{$product[ 'id' ]}/edit}" )?>">
                                            <?= $product[ 'product_name' ]?>
                                        </a>
                                    </td>
                                    <td><?= $product[ 'sku' ] <> "" ? $product[ 'sku' ] : "-"?></td>
                                    <td>

                                        <?php if( $product['stock'] > 1) : ?>
                                        <span class="text-green">In Stock(</span>
                                        <?= $product[ 'stock' ]?>
                                        <span class="text-green">)</span>

                                        <?php else : ?>

                                        <span class="text-danger">Out of Stock</span>

                                        <?php endif;?>

                                        <!--BADGE-->
                                        <?php if($product['stock'] == 0 ) : ?>
                                            <span></span>
                                        <?php elseif( $product['stock']<= $product['stock_limit'] + 5 and $product['stock'] > $product['stock_limit']) : ?>
                                            <span class="label label-warning">low stock</span>
                                        <?php elseif( $product['stock'] <= $product['stock_limit'] ) : ?>
                                            <span class="label label-danger">critical stock</span>
                                        <?php endif;?>
                                    </td>
                                    <td>
                                        <?= $product['selling_price'] ?>
                                    </td>
                                    <td>
                                        <a href="#">
                                            <?= $product['product_type']?>
                                        </a>
                                    </td>
                                    <td>
                                        <?= date('m/d/Y', strtotime($product['updated_at']));?>
                                    </td>
                                    <td>

                                        <div class="toolbar">
                                            <a href="<?= route( "product/{$product[ 'id' ]}/edit" )?>" class="toolbar-tool">
                                                <button type="button" class="btn btn-primary">
                                                    View
                                                </button>
                                            </a>
                                        </div>

                                    </td>

                                </tr>
                                <?php endforeach; ?>

                                <tr>
                                    <th>Img</th>
                                    <th>Product Name</th>
                                    <th>SKU</th>
                                    <th>Stock</th>
                                    <th>Selling Price</th>
                                    <th>Product Type</th>
                                    <th>Date Updated</th>
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
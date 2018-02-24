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
                            <h3 class="box-title"><?= ( isset( $product ) )? "Edit" : "Add New" ?> Product</h3>
                        </div>
                        <!-- /.box-header -->

                        <form action="<?= ( isset( $product ) )? route( "product/{$product[0]['id']}/update" ) : route( 'product/store' ) ?>" method="post" enctype="multipart/form-data">
                            <div class="box-body">

                                <div class="form-group">
                                    <label for="product_image">Product Image <span class="text-danger">( < 5mb )</span></label>
                                    <input type="file" name="product_image" id="product_image" class="form-control" accept="image/*">

                                    <?php if( isset($product) ) : ?>
                                        <div>
                                            <img src="<?= asset( $product[0]['product_image'] ); ?>" class="img-display img-display--thumbnail">
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <!--END FORM GROUP-->

                                <div class="form-group">
                                    <label for="sku">SKU</label>
                                    <input type="text" name="sku" id="sku" class="form-control"
                                           value="<?= isset( $product ) ? $product[0]['sku'] : "" ?>" >
                                </div>
                                <!--END FORM GROUP-->

                                <div class="form-group">
                                    <label for="product_name">Product Name</label>
                                    <input type="text" name="product_name" id="product_name" class="form-control"
                                           value="<?= isset( $product ) ? $product[0]['product_name'] : "" ?>" >
                                </div>
                                <!--END FORM GROUP-->

                                <div class="form-group">
                                    <label for="product_description">Product Description</label>
                                    <input type="text" name="product_description" id="product_description" class="form-control"
                                           value="<?= isset( $product ) ? $product[0]['product_description'] : "" ?>" >
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
                                    <label for="product_brand">Product Brand</label>
                                    <select name="product_brand" id="product_brand" class="form-control">
                                        <option><?= isset( $product ) ? $product[0]['product_brand'] : "" ?></option>
                                        <?php foreach( $brands as $key => $brand ) : ?>
                                            <option><?= $brand[ 'brand_name' ]?></option>


                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <!--END FORM GROUP-->

                                <div class="form-group">
                                    <label for="unit_price">Unit Price</label>

                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <b>Php</b>
                                        </div>
                                        <input type="text" name="unit_price" id="unit_price" class="form-control"
                                            value="<?= isset( $product ) ? $product[0]['unit_price'] : "" ?>" >
                                    </div>
                                </div>
                                <!--END FORM GROUP-->

                                <div class="form-group">
                                    <label for="selling_price">Selling Price</label>

                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <b>Php</b>
                                        </div>
                                        <input type="text" name="selling_price" id="selling_price" class="form-control"
                                               value="<?= isset( $product ) ? $product[0]['selling_price'] : "" ?>" >
                                    </div>

                                </div>
                                <!--END FORM GROUP-->


                                <div class="form-group">

                                    <label for="sale_price">Sale Price</label>

                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <b>Php</b>
                                        </div>
                                        <input type="text" name="sale_price" id="sale_price" class="form-control"
                                               value="<?= isset( $product ) ? $product[0]['sale_price'] : "" ?>" >
                                    </div>
                                    <!-- /.input group -->

                                </div>
                                <!--END FORM GROUP-->

                                <div class="form-group">
                                    <label for="stock">On Hand Stocks</label>
                                    <input type="text" name="stock" id="stock" class="form-control"
                                           value="<?= isset( $product ) ? $stocks[0]['stock'] : "" ?>" >
                                </div>
                                <!--END FORM GROUP-->

                                <div class="form-group">
                                    <label for="stock_limit">Stock Limit</label>
                                    <input type="text" name="stock_limit" id="stock_limit" class="form-control"
                                           value="<?= isset( $product ) ? $stocks[0]['stock_limit'] : "" ?>" >
                                </div>
                                <!--END FORM GROUP-->


                            </div>
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">
                                    <?= isset( $product )? "Update" : "Save" ?> Product
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <?php if( !isset( $product ) ) : ?>
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
                <?php endif; ?>

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
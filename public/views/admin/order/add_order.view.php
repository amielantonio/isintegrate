<?php admin_get_header(); ?>
<?php admin_get_nav(); ?>
<?php admin_get_sidebar(); ?>
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?php echo asset( 'plugins/adminlte/bower_components/jvectormap/jquery-jvectormap.css' ) ?>/">
    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="<?php echo asset( 'plugins/adminlte/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css' ) ?>">
    <!-- Select2 -->
    <link rel="stylesheet" href="<?php echo asset( 'plugins/adminlte/bower_components/select2/dist/css/select2.min.css' ) ?>">



    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <i class="fa fa-shopping-cart"></i> Orders
            </h1>

        </section>

        <!-- Main content -->
        <section class="content">

            <div class="row">

                <div class="col-sm-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Add new Order</h3>
                        </div>
                        <!-- /.box-header -->

                        <form method="post" action="<?= route( 'orrder/store' )?>">
                            <div class="box-body">

                                <div class="row">

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="order_id">OR Number</label>
                                            <input type="text" name="order_id" id="order_id" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="customer_id">Customer name</label>
                                            <input type="text" name="customer_id" id="customer_id" class="form-control">
                                        </div>
                                    </div>

                                </div>
                                <!--END ROW-->


                                <div class="row">

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="date_ordered">Date of Order</label>
                                            <input type="text" name="date_ordered" id="date_ordered" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                    </div>

                                </div>
                                <!--END ROW-->

                                <button id="add_row" class="btn btn-info" type="button">
                                    <i class="fa fa-plus"></i>
                                </button>
                                <button id="add_row" class="btn btn-danger" type="button">
                                    <i class="fa fa-minus"></i>
                                </button>

                                <table class="table" id="product_table">
                                    <tr>
                                        <th>Product Name</th>
                                        <th>Quantity</th>
                                        <th>Selling Price</th>
                                        <th>Amount</th>
                                    </tr>

                                    <tr>
                                        <td>
                                            <select id="product_id" class="form-control select2" name="product_id[]" style="width: 100%;">
                                                <?php foreach( $products as $key => $product) : ?>
                                                    <option value="<?= $product["id"]?>"><?= $product["product_name"]?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </td>
                                        <td>
                                            <input type="number" name="quantity[]" class="form-control quantity-val" id="quantity" placeholder="quantity">
                                        </td>
                                        <td>
                                            <input type="text" name="selling_price[]" class="form-control selling-price-val" id="selling-price" placeholder="Unit Price">
                                        </td>
                                        <td>
                                            <input type="text" name="amount[]" class="form-control amount-val" id="amount" placeholder="Amount" readonly="readonly">
                                        </td>

                                    </tr>



                                </table>


                            </div>
                            <!--END BOX BODY-->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">
                                    Send Order
                                </button>
                            </div>
                            <!--End box footer-->
                        </form>

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
    <!-- bootstrap datepicker -->
    <script src="<?php echo asset( 'plugins/adminlte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js' ) ?>"></script>
    <!-- Select2 -->
    <script src="<?php echo asset( 'plugins/adminlte/bower_components/select2/dist/js/select2.full.min.js' ) ?>"></script>

    <script>
        $ = jQuery;
        $(function () {
            $('#date_received').datepicker({
                autoclose: true,
                todayBtn: true,
                startDate: '<?= date('m-d-Y')?>',
                format: 'mm/dd/yyyy'

            })
        });

        //Initialize Select2 Elements
        $('.select2').select2();

        $( '#add_row' ).on( 'click', function(){

            var table = $( '#product_table' );



            table.append(
                '<tr>' +
                '<td>' +
                '<select class="form-control select2 product_id" name="product_id[]" style="width: 100%;">' +

                '</select>' +
                '</td>' +
                '<td><input type="number" name="quantity[]" class="form-control quantity-val" id="quantity" placeholder="quantity"></td>' +
                '<td><input type="text" name="selling_price[]" class="form-control selling-price-val" id="unit_price" placeholder="Unit Price"></td>' +
                '<td><input type="text" name="amount[]" class="form-control amount-val" id="amount" placeholder="Amount" readonly="readonly"></td>' +
                '</tr>'

            );

            var options = $("#product_id option").clone();

            $( document ).find( '.product_id:last-child' ).append( options );

            $('.select2').select2();

        });

        $( document ).on( 'change', '.product_id', function(){

            var sellingInput = $( this ).parent().siblings().find('.selling-price-val');

            $.ajax({

                url: <?= route( 'product' )?>

            });


        });

        $( document ).on( 'blur','.selling-price-val', function(){

            console.log( 'somethig' );

            var quantityInput = $( this ).parent().siblings().find('.quantity-val');
            var quantity = quantityInput.val();

            var amountInput = $( this ).parent().siblings().find('.amount-val');
            var unitprice = $( this ).val();

            if( quantity === "") return;


            amountInput.val( unitprice * quantity );



        });


    </script>
<?php admin_get_footer(); ?>
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

        <!-- Main content -->
        <section class="content">

            <div class="row">

                <div class="col-sm-12">
                    <div class="box">
                        <div class="box-header">
                            <h1 class="box-title">
                                <i class="fa fa-credit-card"></i> Sales
                            </h1>
                        </div>
                        <!-- /.box-header -->

                        <form method="post" action="<?= route( 'order/store' )?>">
                            <div class="box-body">


                                <hr>
                                <h4>Order Information</h4>
                                <hr>
                                <div class="row">

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="order_id">OR Number</label>
                                            <input type="text" name="order_id" id="order_id" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="date_ordered">Date of Order</label>
                                            <input type="text" name="date_ordered" id="date_ordered" class="form-control">
                                        </div>
                                    </div>

                                </div>
                                <!-- END ROW-->


                                <hr>
                                <h4>Products</h4>
                                <hr>

                                <button id="add_row" class="btn btn-info" type="button">
                                    <i class="fa fa-plus"></i>
                                </button>
                                <button id="subtract_row" class="btn btn-danger" type="button">
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
                                            <select id="product_id" class="form-control select2 product_id" name="product_id[]" style="width: 100%;">
                                                <option></option>
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
                                    Save Order
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
            $('#date_ordered').datepicker({
                autoclose: true,
                todayBtn: true,
                startDate: '<?= date('m-d-Y')?>',
                format: 'mm/dd/yyyy'

            })
        });

        //Initialize Select2 Elements
        $('.select2').select2();


        // Add Row
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

        //Subtract Row
        $( '#subtract_row' ).on( 'click', function(){

            var table = $( '#product_table' );

            table.find( 'tr:last-child').remove();

        });

        // Product Dropdown change event
        $( document ).on( 'change', '.product_id', function(){

            var sellingInput = $( this ).parent().siblings().find('.selling-price-val');
            var product_id = $(this).val();

            $.ajax({

                url: "<?= route( 'product' )?>/" + product_id + "/get",
                method: 'GET',
                success: function( data ){
                    var product = JSON.parse( data );

                    sellingInput.val( product.selling_price );

                }

            });


        });


        // Blur events
        $( document ).on( 'blur','.selling-price-val', function(){

            var quantityInput = $( this ).parent().siblings().find('.quantity-val');
            var quantity = quantityInput.val();

            var amountInput = $( this ).parent().siblings().find('.amount-val');
            var unitprice = $( this ).val();

            if( quantity === "") return;


            amountInput.val( parseFloat(unitprice) * parseFloat(quantity).toFixed(2) );

        });

        $( document ).on( 'blur', '.quantity-val', function(){

            var sellingInput = $( this ).parent().siblings().find('.selling-price-val');
            var selling = sellingInput.val();

            var amountInput = $( this ).parent().siblings().find('.amount-val');
            var quantity = $( this ).val();

            if( selling === "") return;

            amountInput.val( parseFloat(selling) * parseFloat(quantity).toFixed(2) );

        });

        $( '.customer_name' ).on( 'change', function(){

            var readonly = $( '.readonly' );

            if( $( this ).val() === "new"){
                readonly.each( function(){

                    $( this ).removeAttr( 'readonly' );

                });

                $( '.toggle-hidden' ).css({
                    'display'       : 'block',
                    'margin-top'    : '5px'
                });


            }else{


                var value = $( this ).val();

                $.ajax({
                    url: "<?= route( 'customers/' ) ?>" + value + "/get",
                    method: 'GET',
                    success: function( data ){

                        customerInfo = JSON.parse( data );


                        $( '#contact_number' ).val( customerInfo.contact_number );
                        $( '#address' ).val( customerInfo.address );
                        $( '#email' ).val( customerInfo.email );

                    }


                });


                //Hide display
                $( '.toggle-hidden' ).css({
                    'display'       : 'none'
                });

                //Add readonly to each
                readonly.each( function(){

                    $( this ).prop( 'readonly', true );

                });

            }



        });




    </script>

<?php admin_get_footer(); ?>
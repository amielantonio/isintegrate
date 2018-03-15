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
                            <i class="fa fa-wrench"></i> SMS Settings
                        </h1>
                    </div>


                    <form action="<?= route( 'settings/sms-settings/store' ); ?>" method="post">
                        <div class="box-body">

                            <div class="form-group">
                                <label for="sms_key">SMS key</label>
                                <input type="text" name="sms_key" id="sms_key" class="form-control"
                                       value="<?= !empty( $settings )? $settings[0]['sms_key'] : "" ?>" >
                            </div>

                            <div class="form-group">
                                <label for="phone_number">Phone Number to Notify</label>
                                <input type="text" name="phone_number" id="phone_number" class="form-control"
                                       value="<?= !empty( $settings )? $settings[0]['phone_number'] : "" ?>" >
                            </div>

                        </div>

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary"> Save </button>
                        </div>


                    </form>

                </div>
                <!--END BOX-->

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




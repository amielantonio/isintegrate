<?php admin_get_header(); ?>
<?php admin_get_nav(); ?>
<?php admin_get_sidebar(); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Main content -->
        <section class="content">


            <div class="row">

                <div class="col-sm-12">

                    <div class="box">
                        <div class="box-header">
                            <h1 class="box-title">
                                <i class="fa fa-users"></i> User
                            </h1>

                            <div class="box-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
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
                                    <th>User</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Access Level</th>
                                </tr>

                                <?php $x = 1;foreach( $users as $key => $user) : ?>
                                <tr>
                                    <td><?= $x ?></td>
                                    <td><?= $user['firstname']." ".$user['lastname']?></td>
                                    <td><?= $user['email']?></td>
                                    <td><?= $user['contact_number'] ?></td>
                                    <td><span class="label label-primary"><?= $user['access_level']?></span></td>
                                </tr>
                                <?php $x++; endforeach; ?>


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

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


<?php admin_get_footer(); ?>
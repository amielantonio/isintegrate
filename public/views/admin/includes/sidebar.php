<!-- =============================================== -->

<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->

        <ul class="sidebar-menu" data-widget="tree">
    <!--            <li>-->
    <!--                <a href="--><?//= route() ?><!--">-->
    <!--                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>-->
    <!--                </a>-->
    <!--            </li>-->

            <!--View for Admin only-->

            <li>
                <a href="<?= route('inventory') ?>">
                    <i class="fa fa-table"></i>
                    <span>Inventory</span>
                </a>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pencil-square-o"></i>
                    <span>Inventory IN</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>

                <ul class="treeview-menu">
                    <li>
                        <a href="<?= route('receivables') ?>">
                            <i class="fa fa-circle-o"></i> View Inventory IN
                        </a>
                    </li>

                    <li>
                        <a href="<?= route('receivables/create') ?>">
                            <i class="fa fa-circle-o"></i> New Inventory IN
                        </a>
                    </li>

                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-cube"></i> <span>Products</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>

                </a>


                <ul class="treeview-menu">
                    <li>
                        <a href="<?= route('product') ?>">
                            <i class="fa fa-circle-o"></i> View Products
                        </a>
                    </li>

                    <li>
                        <a href="<?= route('product/create') ?>">
                            <i class="fa fa-circle-o"></i> Add Products
                        </a>
                    </li>

                    <li>
                        <a href="<?= route('product/type') ?>">
                            <i class="fa fa-circle-o"></i> Product types
                        </a>
                    </li>
                    <li>
                        <a href="<?= route('product/brands') ?>">
                            <i class="fa fa-circle-o"></i> Brands
                        </a>
                    </li>
                    <li>
                        <a href="<?= route('product/trash') ?>">
                            <i class="fa fa-circle-o"></i> <span class="text-danger">Trash</span>
                        </a>
                    </li>
                </ul>
            </li>


            <li class="treeview">
                <?php


                $orders = count( rawQuerySelect( 'SELECT DISTINCT order_id FROM tbl_orders WHERE order_status = "Pending"' ) );

                ?>


                <a href="#">
                    <i class="fa fa-credit-card"></i>
                    <span>Sales</span> <span class="badge"><?= $orders > 0 ? $orders : "" ?></span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>

                <ul class="treeview-menu">
                    <li>
                        <a href="<?= route('sales') ?>">
                            <i class="fa fa-circle-o"></i> View Sales
                        </a>
                    </li>
                    <li>
                        <a href="<?= route('order') ?>">
                            <i class="fa fa-circle-o"></i> View Order Log
                        </a>
                    </li>
<!--                    <li>-->
<!--                        <a href="--><?//= route('customer') ?><!--">-->
<!--                            <i class="fa fa-circle-o"></i> View Customers-->
<!--                        </a>-->
<!--                    </li>-->
                    <li>
                        <a href="<?= route('order/create') ?>">
                            <i class="fa fa-circle-o"></i> Add New Order
                        </a>
                    </li>

                    <li>
                        <a href="<?= route('order/trash') ?>">
                            <i class="fa fa-circle-o"></i> <span class="text-danger">Trash</span>
                        </a>
                    </li>

                </ul>
            </li>
<!--            <li class="treeview">-->
<!--                <a href="#">-->
<!--                    <i class="fa fa-file"></i>-->
<!--                    <span>Warranty</span>-->
<!--                    <span class="pull-right-container">-->
<!--                      <i class="fa fa-angle-left pull-right"></i>-->
<!--                    </span>-->
<!--                </a>-->
<!---->
<!--                <ul class="treeview-menu">-->
<!--                    <li>-->
<!--                        <a href="--><?//= route('warranty') ?><!--">-->
<!--                            <i class="fa fa-circle-o"></i> View Warranties-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="--><?//= route('warranty/create') ?><!--">-->
<!--                            <i class="fa fa-circle-o"></i> Add Warranty-->
<!--                        </a>-->
<!--                    </li>-->
<!--                </ul>-->
<!--            </li>-->

            <li style="border-top: 1px solid #ccc">

            </li>

<!--            <li class="treeview">-->
<!--                <a href="#">-->
<!--                    <i class="fa fa-truck"></i>-->
<!--                    <span>Supplier</span>-->
<!--                    <span class="pull-right-container">-->
<!--                      <i class="fa fa-angle-left pull-right"></i>-->
<!--                    </span>-->
<!--                </a>-->
<!---->
<!--                <ul class="treeview-menu">-->
<!--                    <li>-->
<!--                        <a href="--><?//= route('supplier') ?><!--">-->
<!--                            <i class="fa fa-circle-o"></i> View Suppliers-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="--><?//= route('supplier/create') ?><!--">-->
<!--                            <i class="fa fa-circle-o"></i> Add Supplier-->
<!--                        </a>-->
<!--                    </li>-->
<!--                </ul>-->
<!--            </li>-->

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user"></i>
                    <span>User</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>

                <ul class="treeview-menu">
                    <li>
                        <a href="<?= route('user') ?>">
                            <i class="fa fa-circle-o"></i> View User
                        </a>
                    </li>
                    <li>
                        <a href="<?= route('user/create') ?>">
                            <i class="fa fa-circle-o"></i> Add User
                        </a>
                    </li>
                </ul>
            </li>

            <li class="">
                <a href="<?= route('settings/sms-settings') ?>">
                    <i class="fa fa-wrench"></i> <span>Settings</span>
                </a>


            </li>

            <li class="">
                <a href="<?= route('logout' ) ?>"><i class="fa fa-sign-out"></i> Sign out</a>
            </li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
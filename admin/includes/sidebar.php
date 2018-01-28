<!-- =============================================== -->

<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->

        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li>
                <a href="<?= direct_public_url() ?>">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>

            <!--View for Admin only-->

            <li>
                <a href="<?= direct_public_url('inventory') ?>">
                    <i class="fa fa-table"></i>
                    <span>Inventory</span>
                </a>
            </li>

            <li>
                <a href="<?= direct_public_url('receivables') ?>">
                    <i class="fa fa-pencil-square-o"></i>
                    <span>Receivables</span>
                </a>
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
                        <a href="<?= direct_public_url('product') ?>">
                            <i class="fa fa-circle-o"></i> View Products
                        </a>
                    </li>

                    <li>
                        <a href="<?= direct_public_url('product?action=create') ?>">
                            <i class="fa fa-circle-o"></i> Add Products
                        </a>
                    </li>

                    <li>
                        <a href="<?= direct_public_url('product_type') ?>">
                            <i class="fa fa-circle-o"></i> Product types
                        </a>
                    </li>
                </ul>
            </li>


            <li class="treeview">
                <a href="#">
                    <i class="fa fa-shopping-cart"></i>
                    <span>Orders</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>

                <ul class="treeview-menu">
                    <li>
                        <a href="<?= direct_public_url('order') ?>">
                            <i class="fa fa-circle-o"></i> View Order Log
                        </a>
                    </li>
                    <li>
                        <a href="<?= direct_public_url('customer') ?>">
                            <i class="fa fa-circle-o"></i> View Customers
                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="<?= direct_public_url('report') ?>">
                    <i class="fa fa-bar-chart"></i> <span>Reports</span>
                </a>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-file"></i>
                    <span>Warranty</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>

                <ul class="treeview-menu">
                    <li>
                        <a href="<?= direct_public_url('warranty') ?>">
                            <i class="fa fa-circle-o"></i> View Warranties
                        </a>
                    </li>
                    <li>
                        <a href="<?= direct_public_url('warranty?action=create') ?>">
                            <i class="fa fa-circle-o"></i> Add Warranty
                        </a>
                    </li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-truck"></i>
                    <span>Supplier</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>

                <ul class="treeview-menu">
                    <li>
                        <a href="<?= direct_public_url('supplier') ?>">
                            <i class="fa fa-circle-o"></i> View Suppliers
                        </a>
                    </li>
                    <li>
                        <a href="<?= direct_public_url('supplier?action=create') ?>">
                            <i class="fa fa-circle-o"></i> Add Supplier
                        </a>
                    </li>
                </ul>
            </li>

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
                        <a href="<?= direct_public_url('user') ?>">
                            <i class="fa fa-circle-o"></i> View User
                        </a>
                    </li>
                    <li>
                        <a href="<?= direct_public_url('user?action=create') ?>">
                            <i class="fa fa-circle-o"></i> Add User
                        </a>
                    </li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-wrench"></i> <span>Settings</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>

                <ul class="treeview-menu">
                    <li>
                        <a href="<?= direct_public_url('inventory_settings') ?>">
                            <i class="fa fa-circle-o"></i> Inventory Settings
                        </a>
                    </li>
                    <li>
                        <a href="<?= direct_public_url('notification_settings') ?>">
                            <i class="fa fa-circle-o"></i> Notification Settings
                        </a>
                    </li>
                </ul>
            </li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
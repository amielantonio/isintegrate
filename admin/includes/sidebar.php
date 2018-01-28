<!-- =============================================== -->

<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->

        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li>
                <a href="<?= direct_admin_url() ?>">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>

            <!--View for Admin only-->

            <li>
                <a href="#">
                    <i class="fa fa-table"></i>
                    <span>Inventory</span>
                </a>
            </li>

            <li class="treeview">
                <a href="<?= direct_admin_url('security') ?>">
                    <i class="fa fa-cube"></i> <span>Products</span>
                    <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>

                </a>


                <ul class="treeview-menu">
                    <li>
                        <a href="<?= direct_admin_url('reservation') ?>">
                            <i class="fa fa-circle-o"></i> View Products
                        </a>
                    </li>

                    <li>
                        <a href="<?= direct_admin_url('reservation') ?>">
                            <i class="fa fa-circle-o"></i> Add Products
                        </a>
                    </li>

                    <li>
                        <a href="<?= direct_admin_url('reservation') ?>">
                            <i class="fa fa-circle-o"></i> Categories
                        </a>
                    </li>
                </ul>
            </li>


            <li class="treeview">
                <a href="#">
                    <i class="fa fa-shopping-cart"></i>
                    <span>Purchases</span>
                </a>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pencil-square-o"></i>
                    <span>Orders</span>
                </a>
            </li>

            <li>
                <a href="<?= direct_admin_url('settings') ?>">
                    <i class="fa fa-bar-chart"></i> <span>Reports</span>
                </a>
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
                        <a href="<?= direct_admin_url('user') ?>">
                            <i class="fa fa-circle-o"></i> View User
                        </a>
                    </li>
                    <li>
                        <a href="<?= direct_admin_url('user') ?>">
                            <i class="fa fa-circle-o"></i> Add User
                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="<?= direct_admin_url('settings') ?>">
                    <i class="fa fa-wrench"></i> <span>Settings</span>
                </a>
            </li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
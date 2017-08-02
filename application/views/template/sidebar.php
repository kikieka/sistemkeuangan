<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo base_url('assets/AdminLTE-2.0.5/dist/img/money.jpg') ?>" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>Hidayatul Vicria</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                <span class="input-group-btn">
                    <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-laptop"></i> <span>Transaksi</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo site_url('C_transaksi/tampil') ?>"><i class="fa fa-circle-o text-info"></i> Daftar Transaksi</a></li>
                    <li><a href="<?php echo site_url('C_transaksi/income') ?>"><i class="fa fa-circle-o text-info"></i> Input Income</a></li>
                    <li><a href="<?php echo site_url('C_transaksi/outcome') ?>"><i class="fa fa-circle-o text-info"></i> Input Outcome</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>Operasional</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo site_url('C_operasional') ?>"><i class="fa fa-circle-o text-info"></i> Daftar Operasional</a></li>
                    <li><a href="<?php echo site_url('C_operasional/tambah') ?>"><i class="fa fa-circle-o text-info"></i> Input Data Operasional</a></li>
                </ul>
            </li>

            <li>
                <a href="#">
                    <i class="fa fa-user"></i> 
                    <span>User</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo site_url('C_user') ?>"><i class="fa fa-circle-o text-info"></i> Daftar user</a></li>
                </ul>
            </li>

            <li>
                <a href="#">
                    <i class="fa fa-th"></i> 
                    <span>Member</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo site_url('C_member/tampil') ?>"><i class="fa fa-circle-o text-info"></i> Daftar Member</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>Kategori</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo site_url('C_kategori/tampil') ?>"><i class="fa fa-circle-o text-info"></i> Daftar Kategori</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i>
                    <span>Report</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo site_url('C_rt')?>"><i class="fa fa-circle-o text-info"></i>Laporan Transaksi</a></li>
                    <li><a href="<?php echo site_url('C_ro')?>"><i class="fa fa-circle-o text-info"></i>Laporan Operasional</a></li>
                </ul>
            </li>

    </section>
    <!-- /.sidebar -->
</aside>

<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
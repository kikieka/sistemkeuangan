<?php
$this->load->view('template/head');
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        OPERASIONAL<br>
        <small>Daftar Operasional</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Operasional</li>
    </ol>
    <!-- Main content -->
    <script type="text/javascript">
      $(document).ready(function() {
        $('#table1').DataTable();
        
      });
    </script>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Daftar Operasional</h3>
            </div>
            <div class="box-body">
            <table id="table1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Member</th>
                <th>Kategori</th>
                <th>Type</th>
                <th>Jumlah</th>
                <th>Keterangan</th>
                <th>Action</th>
              </tr>
              </thead>
                <tbody>
                    <?php  
                  $id_transaksi=1;
                  foreach ($financial as $transaksi) {
                    echo "<tr>";
                    echo '<td>'.$id_transaksi."</td>";
                    echo '<td>'.$transaksi['tanggal']."</td>";
                    echo '<td>'.$transaksi['nama']."</td>";
                    echo '<td>'.$transaksi['nama_kategori']."</td>";
                    echo '<td>'.$transaksi['tipe']."</td>";
                    echo '<td>'.$transaksi['jml_transaksi']."</td>";
                    echo '<td>'.$transaksi['keterangan']."</td>";
                    echo "<td><a href ='".base_url()."C_operasional/edit/".$transaksi['id_transaksi'],"'class='btn-group btn-warning btn-xs'><span class='glyphicon glyphicon-edit'></span>Edit <a href='".base_url()."C_operasional/delete/". $transaksi['id_transaksi']."' class='btn-group btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span> Del</a></td>";
                    $id_transaksi++;
                    echo "</tr>";

                  }
                  ?>
                </tbody>
            </table>
            </div>
          </div>
        </div>
      </div>
    </section>
<?php
$this->load->view('template/js');
?>

<!--tambahkan custom js disini-->
<!-- jQuery UI 1.11.2 -->
<script src="<?php echo base_url('assets/js/jquery-ui.min.js') ?>" type="text/javascript"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Morris.js charts -->
<script src="<?php echo base_url('assets/js/raphael-min.js') ?>"></script>
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/morris/morris.min.js') ?>" type="text/javascript"></script>
<!-- Sparkline -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/sparkline/jquery.sparkline.min.js') ?>" type="text/javascript"></script>
<!-- jvectormap -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') ?>" type="text/javascript"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/knob/jquery.knob.js') ?>" type="text/javascript"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/daterangepicker/daterangepicker.js') ?>" type="text/javascript"></script>
<!-- datepicker -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/datepicker/bootstrap-datepicker.js') ?>" type="text/javascript"></script>
<!-- Data Tables-->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/datatables/jquery.dataTables.min.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/datatables/dataTables.bootstrap.min.js')?>" type="text/javascript"></script>
<!--Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') ?>" type="text/javascript"></script>
<!-- iCheck -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/iCheck/icheck.min.js') ?>" type="text/javascript"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/dist/js/pages/dashboard.js') ?>" type="text/javascript"></script>

<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/dist/js/demo.js') ?>" type="text/javascript"></script>

<?php
$this->load->view('template/foot');
?>
<?php
$this->load->view('template/head');
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        TAMBAH DATA OPERASIONAL
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Operasional</li> 
    </ol>

    <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Input Operasional</h3>
        </div>

        <form  action="http://localhost/Keuangan/C_operasional/tambah" method="post">
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
            <div class="form-group">
                <label>Tanggal Operasional</label>
                <div class="input-group date">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" name="tanggal"  class="form-control" id="datepicker">
                </div>
            </div>
            <label>Kategori</label>
            <input type="text" name="id_kategori" class="form-control" placeholder="Operasional" disabled />
            <br>
            <label>Member</label>
            <select name="id_member" class="form-control">
                    <?php
                    foreach ($member as $row) {
                        echo "<option value='".$row->id_member."'>".$row->nama."</option>";
                    }
                    ?>
                </select>
            <br>
            <label>Tipe Operasional</label><br>
            <select name="tipe" class="form-control">
                    <option value="Outcome">Outcome</option>
                    <option value="Income">Income</option>
                </select>
            <br>
            <label>Jumlah Transaksi</label>
            <input type="number" name="jml_transaksi" class="form-control">
            <br>
            <label>Keterangan</label>
            <input type="text" name="keterangan" class="form-control">
            <br>
            <br>
            <input type="submit" name="submit" value="submit" class="btn btn-success">
</div>
</div>
</div>
</form>
</div>
</section>
<?php
$this->load->view('template/js');
?>

<!--tambahkan custom js disini-->
<!-- jQuery UI 1.11.2 -->
<script src="js/jquery.min.2.0.2.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
<!-- <script src="datepicker/bootstrap-datepicker.js"></script> -->
<script type="text/javascript"></script>
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
<!-- <script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/datepicker/bootstrap-datepicker.js') ?>" type="text/javascript"></script> -->
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') ?>" type="text/javascript"></script>
<!-- iCheck -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/iCheck/icheck.min.js') ?>" type="text/javascript"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/dist/js/pages/dashboard.js') ?>" type="text/javascript"></script>

<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/dist/js/demo.js') ?>" type="text/javascript"></script>
<!-- bootstrap datepicker -->
<script src="<?php echo base_url('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')?>" type="text/javascript"></script>

<script type="text/javascript">
    //Date picker
    $('#datepicker').datepicker({
        autoclose: true
    })
</script>

<?php
    $this->load->view('template/foot');
?>
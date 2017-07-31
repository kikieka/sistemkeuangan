<?php
$this->load->view('template/head');
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        TAMBAH TRANSAKSI 
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Tambah Transaksi</li> 
    </ol>

      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Input Outcome</h3>
        </div>
        <form action="<?php echo base_url('C_transaksi/outcome');?> " method="post">
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <!-- tanggal -->
              <div class="form-group">
                <label>Tanggal</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text"  name="tanggal" id="datepicker" class="form-control" >
                </div>
              </div>
                    <script>
                        $(function() {
                        $( "#datepicker" ).datepicker();
                      });
                    </script>
                
              <!-- ID member-->
              <div class="form-group">
                <label>ID member</label>
                <select class="form-control select2" style="width: 100%;" name="id_member">
                  <?php
                  foreach ($financial as $idmember) {
                      echo "<option value='".$idmember['id_member']."'>".$idmember['nama']."</option>";
                  }
                  ?>
                </select>
              </div>

              <!-- kategori -->
              <div class="form-group">
                <label>Kategori</label>
                <select class="form-control select2" style="width: 100%;" name="id_kategori">
                <?php
                  foreach ($kategori as $kategori) {
                      echo "<option value='".$kategori['id_kategori']."'>".$kategori['nama_kategori']."</option>";
                  }
                  ?>
                </select>
              </div>

              <!-- type -->
              <div class="form-group">
                      <label>Type</label>
                      <input type="text" class="form-control" placeholder="Outcome" disabled/>
              </div>

              <!-- jumlah-->
              <div class="form-group">
                <label>Jumlah Transaksi</label>
                <input name="jml_transaksi" type="text" class="form-control">
              </div>
              <!-- keterangan-->
              <div class="form-group">
                <label>Keterangan</label>
                <input name="keterangan" type="text" class="form-control">
              </div>
              <p>
              <button class="btn btn-success btn-pull-right" type="submit" value="submit" name="submit">Simpan</button>
              </p>
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
<!-- Bootstrap WYSIHTML5 -->
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
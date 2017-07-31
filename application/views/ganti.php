<?php
$this->load->view('template/head');
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>
<section class="content-header">
	<h2>
		<center>UPDATE DATA OPERASIONAL</center>
	</h2>
		<ol class="breadcrumb">
			<li>
				<a href="#"><i class="fa fa-dashboard"></i>Home</a>
			</li>
			<li class="active">Transaksi</li>
		</ol>
<!DOCTYPE>
<html>
<head>
</head>
<body>
<?php
	foreach($financial as $transaksi){ ?>
		<form action="<?php echo base_url();?>C_operasional/do_edit" method="post">
		<tr>
            <div class="form-group">
                <label>Tanggal Operasional</label>
                <div class="input-group date">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                    <td>
					<input type="hidden" name="id_transaksi" value="<?php echo $transaksi->id_transaksi ?>"
					</td>
					<td>
                    <input type="text" name="tanggal" class="form-control" id="datepicker" value="<?php echo $transaksi->tanggal ?>"
                </div>
            </div>
            </td>
            <br>
            <label>Kategori</label>
            <input type="text" name="id_kategori" class="form-control" placeholder="Operasional" disabled />
            <br>
            	<label>Member</label>
            		<select name="id_member" class="form-control" >
		                   	<?php
                   			foreach ($member as $row) {
                        		echo "<option value='".$row->id_member."'";
                        		echo ($transaksi->id_member == $row->id_member) ? "selected" : "";
                        		echo ">".$row->nama."</option>";
                    		}
                    		?>
                	</select>
            <br>
            <label>Tipe Operasional</label><br>
            <select name="tipe" class="form-control" value="<?php echo $transaksi->tipe ?>" 
                    <option value="Outcome">Outcome</option>
                    <option value="Income">Income</option>
                </select>
            <br>
            <label>Jumlah Transaksi</label>
            <input type="number" name="jml_transaksi" class="form-control" value="<?php echo $transaksi->jml_transaksi ?>"
            <br>
            <label>Keterangan</label>
            <input type="text" name="keterangan" class="form-control" value="<?php echo $transaksi->keterangan?>">
		<br>
		<td><input type="submit" name="submit" value="submit" class="btn btn-success">
		</td>
		</tr>
		</form>
	<?php }
?>
</div>
</body>
</html>

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
		<!-- datepicker
		<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/datepicker/bootstrap-datepicker.js') ?>" type="text/javascript"></script>-->
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
<!DOCTYPE html>
<html>
<head>
	<title></title>
		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<center>
	<h2>Data Update</h2>
	</center>
	<table style="margin:20px auto;" border="1">
	<thead>
	<tr>
	<center><th>Id User</th>
	<th>Username</th>
	<th>Role</th>
	<td colspan="2"><center><b>Action</b></center></td>
	</tr>
	</thead>
	<tbody>
	<?php
	$id_user=1;
	foreach ($financial as $financial) {
		echo "<tr>"	;	
		echo '<td>'.$user['id_user']."</td>";
		echo '<td>'.$user['username']."</td> ";
		echo '<td>'.$user['role']."</td>";
		echo '<td>'.anchor('C_user/edit/'.$buku['id_user'],'Update')."</td>";
		echo '<td>'.anchor('C_user/delete/'.$buku['id_user'],'Delete').'</td>';
		echo "</tr>";
	}
	?>
	</tbody>
	</table>
	<center>
	<a href="<?php echo base_url();?>C_user/tambah"><button type="button" class="btn btn-warning">Back</button></a>
	</center>
</body>
</html>
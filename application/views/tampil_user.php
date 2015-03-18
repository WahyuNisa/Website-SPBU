<html>
<head>
<form action='<?=base_url()?>User/tampil_user' method="post" enctype="multipart/form-data" name="form1">
	<title>Sistem Informasi SPBU - Data User</title>
	<link href="http://localhost/spbu/bootstrap/css/bootstrap.css" rel="stylesheet">
	<link href="http://localhost/spbu/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	
	<script scr="http://localhost/spbu/bootstrap/js/bootstrap.js"></script>
	<script scr="http://localhost/spbu/bootstrap/js/bootstrap.min.js"></script>
</head>
<h2>Tampil data User</h2>
<?php echo anchor('User/index','Tambah User') ?>
<div class="panel panel-default">
	<table class="table">
<tr> <th> No </th>
	<th> Username </th>
	<th> Password </th>
	
	<th> Aksi</th></tr>
 <?php
 $No = 1;
			foreach($hasil as $isi)
			{ ?>
			<tr> <td> <?php echo $No++ ?>
				<td><?php echo $isi->username?></td>
				<td><?php echo $isi->password?></td>
				
				<td><?php echo anchor('User/update_user/'.$isi->id_user, 'Edit')." | ";
						  echo anchor('User/hapus_user/'.$isi->id_user, 'Hapus');?>
				</td>
			</tr>
			<?php } ?>
	</table>
	</div>
<body>
</form>
</html>
<?php
echo "<p>".anchor('User', 'Kembali')."</p>";
?>

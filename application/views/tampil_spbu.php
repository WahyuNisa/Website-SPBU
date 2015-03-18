<html>
<head>
<form action='<?=base_url()?>Spbu/tampil_spbu' method="post" enctype="multipart/form-data" name="form1">
	<title>Sistem Informasi SPBU - Data SPBU</title>
	<link href="http://localhost/spbu/bootstrap/css/bootstrap.css" rel="stylesheet">
	<link href="http://localhost/spbu/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	
	<script scr="http://localhost/spbu/bootstrap/js/bootstrap.js"></script>
	<script scr="http://localhost/spbu/bootstrap/js/bootstrap.min.js"></script>
</head>
<h2>Tampil data Spbu</h2>
<?php echo anchor('Spbu/index','Tambah Spbu') ?>
<div class="panel panel-default">
	<table class="table">
<tr> <th> No </th>
	<th> Id_SPBU </th>
	<th> Lokasi </th>
	<th> Jam </th>
	<th> Gambar </th>
	<th> Id_User </th>
	
	<th> Aksi</th></tr>
 <?php
 $No = 1;
			foreach($hasil as $isi)
			{ ?>
			<tr> <td> <?php echo $No++ ?>
				<td><?php echo $isi->id_spbu?></td>
				<td><?php echo $isi->lokasi?></td>
				<td><?php echo $isi->jam?></td>
				<td><?php echo $isi->gambar?></td>
				<td><?php echo $isi->id_user?></td>
				
				<td><?php echo anchor('Spbu/update_spbu/'.$isi->id_data, 'Edit')." | ";
						  echo anchor('Spbu/hapus_spbu/'.$isi->id_data, 'Hapus');?>
				</td>
			</tr>
			<?php } ?>
	</table>
	</div>
<body>
</form>
</html>
<?php
echo "<p>".anchor('Spbu', 'Kembali')."</p>";
?>

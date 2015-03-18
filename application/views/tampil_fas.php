<html>
<head>
<form action='<?=base_url()?>Fas/tampil_fas' method="post" enctype="multipart/form-data" name="form1">
	<title>Sistem Informasi SPBU - Data Fasilitas</title>
	<link href="http://localhost/spbu/bootstrap/css/bootstrap.css" rel="stylesheet">
	<link href="http://localhost/spbu/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	
	<script scr="http://localhost/spbu/bootstrap/js/bootstrap.js"></script>
	<script scr="http://localhost/spbu/bootstrap/js/bootstrap.min.js"></script>
</head>
<h2>Tampil data Fas</h2>
<?php echo anchor('Fas/index','Tambah Fas') ?>
<div class="panel panel-default">
	<table class="table">
<tr> <th> No </th>
	<th> Id_data </th>
	<th> Nama </th>
	
	<th> Aksi</th></tr>
 <?php
 $No = 1;
			foreach($hasil as $isi)
			{ ?>
			<tr> <td> <?php echo $No++ ?>
				<td><?php echo $isi->id_data?></td>
				<td><?php echo $isi->nama?></td>
				
				<td><?php echo anchor('Fas/update_fas//'.$isi->id_fasilitas, 'Edit')." | ";
						  echo anchor('Fas/hapus_fas/'.$isi->id_fasilitas, 'Hapus');?>
				</td>
			</tr>
			<?php } ?>
	</table>
	</div>
<body>
</form>
</html>
<?php
echo "<p>".anchor('Fas', 'Kembali')."</p>";
?>

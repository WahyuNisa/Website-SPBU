<html>
<head>
<form action='<?=base_url()?>Komentar/tampil_komentar' method="post" enctype="multipart/form-data" name="form1">
	<title>Sistem Informasi SPBU - Komentar</title>
	<link href="http://localhost/spbu/bootstrap/css/bootstrap.css" rel="stylesheet">
	<link href="http://localhost/spbu/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	
	<script scr="http://localhost/spbu/bootstrap/js/bootstrap.js"></script>
	<script scr="http://localhost/spbu/bootstrap/js/bootstrap.min.js"></script>
</head>
<h2>Tampil data Komentar</h2>
<?php echo anchor('Komentar/index','Tambah Komentar') ?>
<div class="panel panel-default">
	<table class="table">
<tr> <th> No </th>
	<th> Nama </th>
	<th> Komentar </th>
	<th> Id_data </th>
	
	<th> Aksi</th></tr>
 <?php
 $No = 1;
			foreach($hasil as $isi)
			{ ?>
			<tr> <td> <?php echo $No++ ?>
				<td><?php echo $isi->nama?></td>
				<td><?php echo $isi->komentar?></td>
				<td><?php echo $isi->id_data?></td>
				
				<td><?php echo anchor('Komentar/update_komentar/'.$isi->id_data, 'Edit')." | ";
						  echo anchor('Komentar/hapus_komentar/'.$isi->id_data, 'Hapus');?>
				</td>
			</tr>
			<?php } ?>
	</table>
	</div>
<body>
</form>
</html>
<?php
echo "<p>".anchor('Komentar', 'Kembali')."</p>";
?>

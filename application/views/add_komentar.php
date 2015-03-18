<form action='<?=base_url()?>Komentar/simpan_komentar' method="post" enctype="multipart/form-data" name="form1">
  <table width="80%"  border="0" cellspacing="0" cellpadding="4">
    <tr>
      
	<tr>
	<td>Nama</td>
      <td><input name="nama" type="text" id="nama" class="form-control"></td>
    </tr>
	<tr>
	<td>Komentar</td>
      <td><input name="komentar" type="text" id="komentar" class="form-control"></td>
    </tr>
    <tr>
	<td>Id_data</td>
      <td><input name="id_data" type="text" id="id_data" class="form-control"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input name="simpan" type="submit" id="simpan" value="Simpan" class="form-control"></td>
    </tr>
  </table>
</form>

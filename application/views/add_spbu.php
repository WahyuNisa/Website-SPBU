<form action='<?=base_url()?>Spbu/simpan_spbu' method="post" enctype="multipart/form-data" name="form1">
  <table width="80%"  border="0" cellspacing="0" cellpadding="4">
    <tr>
      
	<tr>
	<td>Id_spbu</td>
      <td><input name="id_spbu" type="text" id="id_spbu" class="form-control"></td>
    </tr>
	<tr>
	<td>Lokasi</td>
      <td><input name="lokasi" type="text" id="lokasi" class="form-control"></td>
    </tr>
    <tr>
	<td>Jam</td>
      <td><input name="jam" type="text" id="jam" class="form-control"></td>
    </tr>
    <tr>
	<td>Gambar</td>
      <td><input name="gambar" type="text" id="gambar" class="form-control"></td>
    </tr>
    <tr>
	<td>Id_user</td>
      <td><input name="id_user" type="text" id="id_user" class="form-control"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input name="simpan" type="submit" id="simpan" value="Simpan" class="form-control"></td>
    </tr>
  </table>
</form>

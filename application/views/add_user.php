<form action='<?=base_url()?>User/simpan_user' method="post" enctype="multipart/form-data" name="form1">
  <table width="80%"  border="0" cellspacing="0" cellpadding="4">
    <tr>
      
	<tr>
	<td>Username</td>
      <td><input name="username" type="text" id="username" class="form-control"></td>
    </tr>
	<tr>
	<td>Password</td>
      <td><input name="password" type="text" id="password" class="form-control"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input name="simpan" type="submit" id="simpan" value="Simpan" class="form-control"></td>
    </tr>
  </table>
</form>

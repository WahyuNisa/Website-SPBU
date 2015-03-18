<table width="96%"  border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="15%" rowspan="4"><img src="../../images/index.jpg" width="276" height="183" /></td>
    <td width="15%" height="25" valign="top">Kode PSBU </td>
    <td width="88%" valign="top">:<?php echo $hasil[0]["id_spbu"];?></td>
  </tr>
  <tr>
    <td height="25" valign="top">Fasilitas</td>
    <td valign="top"><ol><?php 
	foreach($hasil as $row){?>
		<li><?php echo $row["nama"];?></li><br>
    <?php
	}
?>
</ol></td>
  </tr>
  <tr>
    <td height="25" valign="top">&nbsp;</td>
    <td valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td height="25" valign="top">&nbsp;</td>
    <td valign="top"><div align="right"></div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="25">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<?php 
	$a='r';
	foreach($kom as $rw){ $a='s';?>
	
<table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="14%">Nama</td>
    <td width="86%"><?php echo $rw["nama"];?></td>
  </tr>
  <tr>
    <td>Komentar</td>
    <td><?php echo $rw["komentar"];?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<?php } if($a=='r') echo "Belum ada Kmentar";?>
<form name="form1" method="post" action="<?=base_url()?>Dataspbu/komen">
  <p>
    <input name="nm" type="text" id="nm">
    <input name="id" type="hidden" id="id" value="<?php echo $hasil[0]["id_data"];?>">
  </p>
  <p>
    <textarea name="txt" id="txt"></textarea>
</p>
  <p>
    <input name="komen" type="submit" id="komen" value="Submit">
  </p>
</form>

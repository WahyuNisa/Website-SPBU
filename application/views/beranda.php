<?php 
	foreach($hasil as $row){
?>
<table width="96%"  border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="15%" rowspan="4"><img src="<?=base_url()?>/images/<?php echo $row["gambar"];?>" width="139" height="91"></td>
    <td width="15%" height="25">Kode PSBU </td>
    <td width="88%">:<?php echo $row["id_spbu"];?></td>
  </tr>
  <tr>
    <td height="25">Lokasi</td>
    <td>:<?php echo $row["lokasi"];?></td>
  </tr>
  <tr>
    <td height="25">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="25">&nbsp;</td>
    <td><div align="right"><a href="<?=base_url()?>Dataspbu/detailData/<?php echo $row["id_data"];?>">Selengakapnya</a></div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="25">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<?php
	}
?>
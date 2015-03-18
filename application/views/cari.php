<form name="form1" method="post" action="">
  Cari
  <select name="pilih" id="pilih">
    <option value="lokasi" selected>Lokasi</option>
    <option value="nama">Fasilitas</option>
  </select>
  <input name="cari" type="text" id="cari">
  <input name="c" type="submit" id="c" value="Cari">
</form>


<?php 
	if(isset($hasil)){
	$no=1;
	foreach($hasil as $row){
	$no++;
?>
<table width="96%"  border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="15%" rowspan="4"><img src="../../images/index.jpg" alt="SPBU" width="240" height="155" /></td>
    <td width="15%" height="25">Kode SBU </td>
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
	if($no==1) echo "<center>Data Tidak Ditemukan</center>";
	}
?>
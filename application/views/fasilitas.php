<form name="form1" method="post" action="">
  <select name="select">
    <?php 	foreach($spbu as $row){ ?>
	<option value="<?php echo $row['id_data']; ?>"><?php echo $row['id_spbu']; ?></option>
	<?php } ?>
  </select>
  <input type="text" name="textfield">
</form>
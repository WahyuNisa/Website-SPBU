<ul class="product">
	<?php foreach($product as $p): ?>
	<li>
		<h3><?php echo $p['name']; ?></h3>
		<img src="<?php echo base_url(); ?>/product/<?php echo $p['image']; ?>" alt="" />
		<small>Rp<?php echo $p['price']; ?></small>
		<?php echo form_open('cart/add_cart_item'); ?>
			<fieldset>
				<label>Quantity</label>
				<?php echo form_input('quantity', '1', 'maxlength="2"'); ?>
				<?php echo form_hidden('productID', $p['productID']); ?>
				<?php echo form_submit('add', 'Add'); ?>
			</fieldset>
		<?php echo form_close(); ?>
	</li>
	<?php endforeach;?>
</ul>

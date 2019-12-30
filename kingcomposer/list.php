<?php
$list_container = $atts['container_name'];
$list_class = $atts ['class_name'];
$list_order = $atts ['order'];
$list_style = $atts ['style'];

if ($list_container) {
	?>
	<<?php echo $list_order; ?> class="<?php echo $list_class; ?>">
		<?php foreach ($atts['list_item'] as $key => $item): ?>
			<li><?php echo $item->list ?></li>
		<?php endforeach ?>
	</<?php echo $list_order; ?>>
	<?php
}else{
	?>
	<<?php echo $list_order; ?> class="<?php echo $list_class; echo $list_style ?>">
		<?php foreach ($atts['list_item'] as $key => $item): ?>
			<li><?php echo $item->list ?></li>
		<?php endforeach ?>
	</<?php echo $list_order; ?>>
	<?php
}

?>
<style type="text/css">
	.<?php echo $list_style ?> {
		list-style: <?php echo $list_style; ?>
	}
</style>
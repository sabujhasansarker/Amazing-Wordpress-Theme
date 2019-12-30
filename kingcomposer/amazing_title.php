<?php
// print_r($atts);
$class_name = $atts['class_name'] ?? '';
$tag = $atts['title_tag'];
$container_name = $atts['container_name'];
$text_style = $atts['text_style'];
// print_r($atts);
?>
<?php 
	if ($container_name) {
		?>
		<div class="<?php echo $container_name ?>">
			<<?php echo $tag; ?> class="<?php echo($class_name); echo ($text_style)?>" ><?php echo $atts['title']; ?></<?php echo $tag; ?>>
		</div>
		<?php
	}else{
		?>
		<<?php echo $tag; ?> class="<?php echo($class_name); echo ($text_style) ?>"><?php echo $atts['title']; ?></<?php echo $tag; ?>>
		<?php
	}
 ?>
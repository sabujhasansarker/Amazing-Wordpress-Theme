<?php 
$atts['amp_image_style'] = str_replace('`{', '`:{', $atts['amp_image_style']);
$atts['amp_image_style'] = str_replace('`', '"', $atts['amp_image_style']);
$amp_image_style = json_decode($atts['amp_image_style'], true);
$amp = $amp_image_style['kc-css']['any']['amp'];
// print_r($amp)
?>
<div class="<?php echo $amp['extra_class_name|'] ?>">
<amp-img width="<?php echo $amp['width|'] ?>" height="<?php echo  $amp['height|'] ?>" layout="responsive" src="<?php echo $atts['image']?>" alt="Image">
</amp-img>
</div>

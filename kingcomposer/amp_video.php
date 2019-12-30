<?php

// print_r($atts);
$atts['amp_video_style'] = str_replace('`{', '`:{', $atts['amp_video_style']);
$atts['amp_video_style'] = str_replace('`', '"', $atts['amp_video_style']);

$amp_video_style = json_decode($atts['amp_video_style'], true);
// print_r($amp_video_style['kc-css']['any']['amp']  );
?>
<amp-youtube width="480" height="270" layout="responsive" data-param-modestbranding="1" data-param-rel="1" data-videoid="<?php echo substr($atts['video_id'], 32); ?>"></amp-youtube>
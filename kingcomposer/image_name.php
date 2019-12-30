<?php

// print_r($atts);
echo substr($atts['video_id'], 32);
$atts['amp_video_style'] = str_replace('`{', '`:{', $atts['amp_video_style']);
$atts['amp_video_style'] = str_replace('`', '"', $atts['amp_video_style']);

$amp_video_style = json_decode($atts['amp_video_style'], true);
// print_r($amp_video_style['kc-css']['any']['amp']  );
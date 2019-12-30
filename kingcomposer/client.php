<?php 
	
$atts['cliend_style'] = str_replace('`{', '`:{', $atts['cliend_style']);
$atts['cliend_style'] = str_replace('`', '"', $atts['cliend_style']);
$cliend_style = json_decode($atts['cliend_style'], true);


 ?>
<div class="<?php echo($cliend_style['kc-css']['any']['class']['container_name|'] ) ?>">
        <div class="<?php echo($cliend_style['kc-css']['any']['class']['row_name|'] ) ?>">
            <span><?php echo $atts['title']; ?></span>
            <ul>
            	<?php 
            		if ($atts['group_item']) {
            			foreach ($atts['group_item'] as $key => $item) {
            							$item->client_single_image=str_replace('`{', '`:{', $item->client_single_image);
            							$item->client_single_image=str_replace('`', '"', $item->client_single_image);
            							$client_single_image = json_decode($item->client_single_image, true);
            							// print_r($client_single_image);

	            			?>
	            			<li><<?php echo $item->single_client_toggle == 'yes' ? 'button on="'.$item->single_click.':
	            			'.$item->single_image_class.'"' : 'a href="'.$item->client_link.'"'; ?>><amp-img width="<?php echo($client_single_image['kc-css']['any']['class']['width|']) ?>" height="<?php echo($client_single_image['kc-css']['any']['class']['height|']) ?>" layout="responsive" src="<?php  echo $item->client_image ?>" alt="upLogo"></amp-img></<?php echo $item->single_client_toggle == 'yes' ? 'button' : 'a' ?>></li>
	            			<?php
            			}
            		}
            	 ?>
           </ul>
        </div>
    </div>
<!-- on="$item->single_click'.:.'$item->single_image_class" -->
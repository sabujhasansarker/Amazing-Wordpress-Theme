<?php

$atts['amazing_slider'] = str_replace('`{', '`:{', $atts['amazing_slider']);
$atts['amazing_slider'] = str_replace('`', '"', $atts['amazing_slider']);

$amazing_slider = json_decode($atts['amazing_slider'], true);
// print_r($atts[]);
?>

    <div class="<?php echo($amazing_slider['kc-css']['any']['class']['container_name|']) ?>">
        <div class="<?php echo($amazing_slider['kc-css']['any']['class']['row_name|']) ?>">
            <amp-carousel id="carousel" width="1200" height="630" layout="responsive" type="slides" autoplay delay="<?php echo($atts['autoplay_duration']) ?>" on="slideChange:cSelector.toggle(index=event.index, value=true)">
                <?php 
                    if ($atts['group_item']) {
                        foreach ($atts['group_item'] as $key => $item) {
                           ?>
                           <div class="slide-wrap">
                                <span class="gLogo"><amp-img width="241" height="80" layout="intrinsic" src="<?php echo $item->client_image; ?>" alt="gLogo"></amp-img></span>                    
                                <div class="slideMid">
                                    <p><?php echo $item->client_comment; ?></p>
                                </div>
                                <span class="star"><amp-img width="243" height="41" layout="intrinsic" src="<?php echo get_template_directory_uri() ?>/image/star.png" alt="star"></amp-img></span>
                                <h6><?php echo $item->client_name; ?></h6>
                            </div> 
                           <?php
                        }
                    }
                 ?>
                              
            </amp-carousel>
            <amp-selector id="cSelector" on="select:carousel.goToSlide(index=event.targetOption)" layout="container">
                <?php 
                    for ($i=0; $i < count($atts['group_item']); $i++) { 
                 ?>
                <span option="<?php echo $i; ?>" <?php echo $i>1 ? '' : 'selected' ?>></span>    <?php } ?>
            </amp-selector>
        </div>
    </div>

<?php 


 ?>
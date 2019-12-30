<html amp lang="en">   
<head>
<title>Amazing Business Results</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
<meta name="keywords" content="Amazing Business Results">
<meta name="description" content="Amazing Business Results">

<link rel="icon" href="<?php echo get_template_directory_uri() ?>/image/amp_favicon.png">
<link rel="canonical" href="article.amp.html">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,600,600i,700&display=swap" rel="stylesheet"> 
<style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
<script async src="https://cdn.ampproject.org/v0.js"></script>
<script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>
<script async custom-element="amp-lightbox" src="https://cdn.ampproject.org/v0/amp-lightbox-0.1.js"></script>
<script async custom-template="amp-mustache" src="https://cdn.ampproject.org/v0/amp-mustache-0.2.js"></script>
<script async custom-element="amp-selector" src="https://cdn.ampproject.org/v0/amp-selector-0.1.js"></script>
<script async custom-element="amp-carousel" src="https://cdn.ampproject.org/v0/amp-carousel-0.1.js"></script>
<script async custom-element="amp-youtube" src="https://cdn.ampproject.org/v0/amp-youtube-0.1.js"></script>
<script async custom-element="amp-bind" src="https://cdn.ampproject.org/v0/amp-bind-0.1.js"></script>

<style amp-custom>
<?php
$bufferCss = file_get_contents(get_template_directory_uri().'/style.css');
$bufferCss = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $bufferCss);
$bufferCss = str_replace(': ', ':', $bufferCss);
$bufferCss = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $bufferCss);
echo $bufferCss;
?>
</style>
<?php wp_head() ?>
</head>
<body <?php body_class();?>>
    <?php 
        $option='option';
        $site_logo = get_field('site_logo',$option);
        $header_logo =get_field('header_logo',$option);
        $footer_logo = get_field('footer_logo',$option);
        $phone_number_ = get_field('phone_number_',$option);
        $footer_text = get_field('footer_text',$option);
        $logo = get_field('if_you_went_same_logo_header_and_footer',$option);
        $logo_link = get_field('logo_link',$option);
     ?>
	<header class="header">
    <div class="hdrIn">
        <?php 
            if (!$logo) {
                ?>
                <a id="logo" href="<?php echo $logo_link['url']?>">
                    <amp-img width="294" height="89" layout="responsive" src="<?php echo($header_logo) ?>" alt="Amazing"></amp-img>
                    <em class="discernible_name">empty</em>
                </a>
                <?php
            }else{
                 ?>
                <a id="logo" href="<?php echo $logo_link['url']?>">
                    <amp-img width="294" height="89" layout="responsive" src="<?php echo($site_logo) ?>" alt="Amazing"></amp-img>
                    <em class="discernible_name">empty</em>
                </a>
                <?php
            }
         ?>
        
        <button id="menuBtn" on="tap:menu.toggleClass(class='toggleMenu')" title="Title">
            <span class="menuBtnIn">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </span>
            <em class="discernible_name">empty</em>
        </button>
        <?php wp_nav_menu( array(
                            'getme_location'  => '',
                            'menu'            => '',
                            'container'       => 'div',
                            'container_class' => 'navigation',
                            'container_id'    => '',
                            'menu_class'      => 'menu',
                            'menu_id'         => 'menu',
                            'echo'            => true,
                            'fallback_cb'     => 'wp_page_menu',
                            'before'          => '',
                            'after'           => '',
                            'link_before'     => '',
                            'link_after'      => '',
                            'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
                            'depth'           => 0,
                            'walker'          => '',
                        ) ); ?>
</div>
</header>
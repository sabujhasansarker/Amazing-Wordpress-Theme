<?php
add_theme_support( 'post-thumbnails' );
function bizcola_nav() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu','amazing' )
    )
  );
}
add_action( 'init', 'bizcola_nav' );

function wpb_set_post_views($postID) {
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}

include 'inc/acf.php';
?>

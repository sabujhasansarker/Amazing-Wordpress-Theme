<?php
/*
* Template Name: Liked Posts
*/

$current_user = get_current_user_id();
?>
    <table class="form-table">
        <tr>
            <th><label for="user_likes"><?php _e( 'You Like:', 'YourThemeTextDomain' ); ?></label></th>
            <td>
            <?php
            $types = get_post_types( array( 'public' => true ) );
            $args = array(
              'numberposts' => -1,
              'post_type' => $types,
              'meta_query' => array (
                array (
                  'key' => '_user_liked',
                  'value' => $current_user,
                  'compare' => 'LIKE'
                )
              ) );      
            $sep = '';
            $like_query = new WP_Query( $args );
            if ( $like_query->have_posts() ) : ?>
            <p>
            <?php 
            
 while ( $like_query->have_posts() ) : $like_query->the_post(); 
 echo $sep; 
 $post_id = get_the_ID();
 $nonce = wp_create_nonce( 'simple-likes-nonce' );
 $is_comment = '0';
?>
 <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
 <?php the_title(); ?></a> 
 <?php echo  $post_id; ?>
 <a href="<?php echo admin_url( 'admin-ajax.php?action=process_simple_like' . '&post_id=' . $post_id . '&nonce=' . $nonce . '&is_comment=' . $is_comment . '&disabled=true') ?>">Remove</a>
 <?php echo do_shortcode('[jmliker]'); ?>
            <?php
            $sep = ' &middot; ';
            endwhile; 
            ?>
            </p>
            <?php else : ?>
            <p><?php _e( 'You do not like anything yet.', 'YourThemeTextDomain' ); ?></p>
            <?php 
            endif; 
            wp_reset_postdata(); 
            ?>
            </td>
        </tr>
    </table>

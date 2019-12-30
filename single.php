<?php get_header(  ); ?>
<div class="blogCont">
<?php 
if (have_posts()) {
    while (have_posts()) {
        the_post();
        $user = wp_get_current_user();
        // post popular post count++
        wpb_set_post_views(get_the_ID());
        ?>
        	<div class="single-blog">
    	<div class="posted">
            <div class="pPersonPhoto">
            	<amp-img width="75" height="75" layout="intrinsic" src="<?php echo esc_url( get_avatar_url( $user->ID ) ); ?>" alt="image"></amp-img>
            </div>
            <div class="pPersonName"><?php the_author( ) ?></div>
            <div class="pDate"><?php the_date( ) ?></div>
        </div>
    	<h1><?php the_title( ) ?></h1>
    	<amp-img width="1067" height="562" layout="responsive" src="<?php the_post_thumbnail_url(  ) ?>" alt="single image"></amp-img>
        <?php the_content(  ) ?>
        <div class="sbBtm">
            <ul class="socialLink">
            	<li class="facebook"><a href="#"></a></li>
            	<li class="twitter"><a href="#"></a></li>
            	<li class="linkedin"><a href="#"></a></li>
            	<li class="link"><a href="#"></a></li>
            	<li class="heart"><a href="#"></a></li>
            </ul>
        </div>
        <div class="sbBtmBtn">
                <div>
                	<a class="btn" href="<?php echo get_page_link(784) ?>">See All</a>
                </div>
                <div class="sb-prevNext">
                	<?php 
                	  previous_post_link(  '%link', $link = 'Prev', );
    				  next_post_link(  '%link', $link = 'Next', );
                	 ?>
                </div>
            </div>
    </div>
        <?php
    }
}

 ?>

</div>
<?php get_footer() ?>
<?php get_header(); ?>
<div class="blogCont">
<?php 
$popular_post_quary = new WP_Query(array('post_type'=>'post','posts_per_page' => 3, 'meta_key' => 'wpb_post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC'));
if ($popular_post_quary->have_posts()) {
	?>
	<h2>Top  viewed</h2>
	<div class="blogRow">
	<?php
	while ($popular_post_quary->have_posts()) {
		$popular_post_quary->the_post();
 		$blog_contents = get_the_content();
 		$count = get_post_meta(get_the_ID(), 'wpb_post_views_count', true);
		?>
		<div class="blogBox">
			<?php if (!empty(get_the_post_thumbnail_url( ))) {
				?>
				<a class="blogImg" href="<?php the_permalink(  ) ?>">
                <amp-img width="366" height="207" layout="responsive" src="<?php the_post_thumbnail_url(  ) ?>" alt="Post image"></amp-img>
            </a>
				<?php
			} ?>
            <h6><a href="<?php the_permalink(  ) ?>"><?php the_title( ) ?></a></h6>
          <p> <?php echo substr($blog_contents,0,100); ?></p>
            <div class="postTime">
            	<span class="viewLike">
                	<span class="view"><?php echo $count; ?></span>
                    <span class="like">115</span>
                </span>
            	<span class="postDate"><?php the_date( ) ?></span>
            </div>
            </div>
		<?php
	}
	?>
	</div>

<?php 
}
$post_quary = new WP_Query(array('post_type'=>'post'));
if (have_posts()) {
	?>
	<h2>Latest Posts</h2>
	<div class="blogRow">
	<?php
	while (have_posts()) {
		the_post();
		$blog_contents = get_the_content();
		$count = get_post_meta(get_the_ID(), 'wpb_post_views_count', true);
		?>
			    <div class="blogBox">
			        <a class="blogImg" href="<?php the_permalink(  ) ?>">
			            <amp-img width="366" height="207" layout="responsive" src="<?php the_post_thumbnail_url(  ) ?>" alt="Post image"></amp-img>
			        </a>
			        <h6><a href="<?php the_permalink(  ) ?>"><?php the_title(  ) ?></a></h6>
			        <p> <?php echo substr($blog_contents,0,100); ?></p>
			        <div class="postTime">
			        	<span class="viewLike">
			            	<span class="view"><?php echo $count; ?></span>
			                <span class="like">115</span>
			            </span>
			        	<span class="postDate"><?php the_date(  ) ?></span>
			        </div>
			    </div>
		<?php
	}
	?>

			</div>
	<?php
	
}
?>
<ul class="pagination">
    <?php echo paginate_links(array('prev_text' => 'Prev',
        'next_text' => 'Next',
        'mid_size' => 1
         )); ?>
    </ul>
</div>

	<?php
get_footer();
 ?>








<style type="text/css">
	.view {
    padding: 0 15px 0 30px;
    background: url(<?php echo get_template_directory_uri() ?>/image/view.png) no-repeat left center;
    display: inline-block;
}
.like{
	padding-left:30px;
	background:url(<?php echo get_template_directory_uri() ?>/image/like.png) no-repeat left center;
	display:inline-block;
}

</style>
<?php
/*
Template Name: Gallery Page
*/
get_header(); ?>
	<div class="main">
		<div class="gallery-container clearfix">
			<div class="gallery-filter">
				<div class="filter all active" data-filter="all">All</div>
				<div class="filter one" data-filter="menus">Menu</div>
				<div class="filter two" data-filter="order-menus">By Order</div>
				<div class="filter three" data-filter="our-world">Our world</div>
			</div>
			<?php
			$loop = new WP_Query( array( 'post_type' => array( 'menus','order-menus','shops','communities','our-people' ), 'posts_per_page' => -1) );?>
			<div class="gallery clearfix" id="gallery">
			<?php
			while ( $loop->have_posts() ) : $loop->the_post();?>
				<div class="mix gallery-group <?php echo $post->post_type=='shops'||$post->post_type=='communities'||$post_type=='our-people' ? 'our-world': $post->post_type;?>">
						<div class="gallery-group-box">
							<div class="gallery-group-box-thumb">
							<a href="<?php echo get_permalink( $post->ID ) ?>" title="<?php echo $post->post_title;?>">
							<?php if ( has_post_thumbnail()) {
								echo get_the_post_thumbnail($post->ID, 'gallery-image-thumb'); 
							}?>
							</a>
							</div>
							<div class="gallery-group-box-area">
								<div class="gallery-group-box-area-title"><a href="<?php echo get_permalink( $post->ID ) ?>" title="<?php echo $post->post_title;?>"><h1><?php the_title()?></h1></a></div>
								<div class="desc"><?php the_excerpt()?></div>
							</div>
							<div class="read-more"><a href="<?php echo get_permalink( $post->ID ) ?>" title="<?php echo $post->post_title;?>">Read More</a></div>
							<div class="share">
								<span>Share</span>
								<span><a  onclick="return !window.open(this.href, 'Facebook', 'width=640,height=300')" href="http://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink( $post->ID )?>" class="facebook"></a></span>
								<span><a  target="_blank" data-count="%d" title="Share on Twitter" href="http://twitter.com/share?text=<?php echo $post->post_title;?>&url=<?php echo get_permalink( $post->ID )?>" class="twitter btn btn-counter" rel="nofollow"></a></span>
							</div>
						</div>
					</div>
			<?php $i++; endwhile;?>
			
		</div>
	</div>
<?php get_footer();?>
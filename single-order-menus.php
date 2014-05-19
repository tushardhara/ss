<?php
/**
 * The Template for displaying Order Menus single posts.
 *
 */

get_header(); ?>
	<div class="main">
		<div class="container clearfix">
			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();
					get_template_part( 'single-page-order-menus', get_post_format() );
				endwhile;
			?>
		</div>
	</div>
<?php get_footer();?>
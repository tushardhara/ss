<?php
/**
 * The main template file.
 */

get_header();?>
	<div class="main">
		<div class="container clearfix" id="loop">
			<?php
				if ( have_posts() ) : 
				// Start the Loop.
					while ( have_posts() ) : the_post();
						get_template_part( 'content', get_post_format() );
					endwhile;
					else :
					// If no content, include the "No posts found" template.
					get_template_part( 'content', 'none' );
				endif;
			?>
		</div>
		<?php ss_paging_nav(); ?>
	</div>
<?php get_footer();?>
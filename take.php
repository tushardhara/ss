<?php
/*
Template Name: Take Page
*/
get_header(); ?>
	<div class="main">
		<div class="container clearfix">
			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();
			?>
			<h1 class="order-title"><?php the_title();?></h1>
			<div class="my-content"><?php the_content();?></div>
			<?php
				endwhile;
			?>
			<div class="order-menu clearfix">
				<?php
					//list terms in a given taxonomy (useful as a widget for twentyten)
					$taxonomy = 'order-catergories';
					$tax_terms = get_terms($taxonomy);
					$i=0;
					foreach ($tax_terms as $tax_term) {
						//print_r($tax_term->term_id);
						//echo '<li>' . '<a href="' . esc_attr(get_term_link($tax_term, $taxonomy)) . '" title="' . sprintf( __( "View all posts in %s" ), $tax_term->id ) . '" ' . '>' . $tax_term->name.'</a></li>';
					?>

				<div class="order-group">
					<div class="order-group-box">
						<div class="order-menu-name"><span><?php echo $tax_term->name;?></span><span class="menu-toggle-icon"></span></div>
						<div class="order-menu-items">
								<?php 
										$arg= array(
										'post_type' => 'order-menus',
										'post_status' => 'publish',
										'posts_per_page' => -1,
										'tax_query' => array(
											array(
												'taxonomy' => 'order-catergories',
												'field' => 'id',
												'terms' => $tax_term->term_id
											)
										)
									);
									?>
								<?php $wp_query_order_menus = new WP_Query($arg); ?>
								<?php if ( $wp_query_order_menus->have_posts() ) : ?>
								<?php /* Start the Loop */ ?>
								<?php while ( $wp_query_order_menus->have_posts() ) : $wp_query_order_menus->the_post(); ?>
									<div class="order-menu-item">
										<div class="orfer-menu-item-name"><a href="<?php echo get_permalink( $post->ID ) ?>" title="<?php echo $post->post_title;?>"><?php the_title();?></a><div class="orfer-menu-item-price">QR <?php echo get_field('price');?></div></div>
										<div class="orfer-menu-item-desc"><?php the_excerpt();?></div>
									</div>
								<?php endwhile; ?>
							<?php endif; ?>
						</div>	
					</div>
				</div>
			<?php } ?>
			</div>
		</div>
	</div>
<?php get_footer();?>
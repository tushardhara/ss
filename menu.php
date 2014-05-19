<?php
/*
Template Name: Menu Page
*/
get_header(); ?>
	<div class="main line-bg">
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
			<div class="menu clearfix">
									<div class="menu-left">
						<div class="menu-group">
				<?php
					//list terms in a given taxonomy (useful as a widget for twentyten)
					$taxonomy = 'menu-categories';
					$tax_terms = get_terms($taxonomy);
					$i=0;
					foreach ($tax_terms as $tax_term) {
						//print_r($tax_term->term_id);
						//echo '<li>' . '<a href="' . esc_attr(get_term_link($tax_term, $taxonomy)) . '" title="' . sprintf( __( "View all posts in %s" ), $tax_term->id ) . '" ' . '>' . $tax_term->name.'</a></li>';
					?>
						<div id="<?php echo $tax_term->term_id;?>" class="menu-group-box <?php if($i==0){ echo 'active';}?>">
							<div class="menu-name"><span><?php echo $tax_term->name;?></span></div>
							<div class="menu-items">
									<?php 
										$arg= array(
										'post_type' => 'menus',
										'post_status' => 'publish',
										'posts_per_page' => -1,
										'tax_query' => array(
											array(
												'taxonomy' => 'menu-categories',
												'field' => 'id',
												'terms' => $tax_term->term_id
											)
										)
									);
									?>
									<?php $wp_query_menus = new WP_Query($arg); ?>

									<?php //$wp_query_menus->query('post_type=menus&post_status=publish&posts_per_page=-1&cat='.$tax_terms->term_id); ?>
									<?php if ( $wp_query_menus->have_posts() ) : ?>
										<?php /* Start the Loop */ ?>
										<?php //print_r($wp_query_menus)?>
										<?php while ( $wp_query_menus->have_posts() ) : $wp_query_menus->the_post(); ?>
											<div class="menu-item">
												<div class="menu-item-name"><a href="<?php echo get_permalink( $post->ID ) ?>" title="<?php echo $post->post_title;?>"><?php the_title();?></a><div class="menu-item-price">QR <?php echo get_field('price');?></div></div>
												<div class="menu-item-desc"><?php the_excerpt();?></div>
											</div>
										<?php endwhile; ?>
									<?php endif; ?>
								<?php wp_reset_query(); ?>
							</div>	
						</div>
					<?php $i++;} ?>
					</div>
				</div> 
				<div class="menu-right">
				<?php
					//list terms in a given taxonomy (useful as a widget for twentyten)
					$taxonomy = 'menu-categories';
					$tax_terms = get_terms($taxonomy);
					$i=0;
					foreach ($tax_terms as $tax_term) {
						//print_r($tax_term->term_id);
						//echo '<li>' . '<a href="' . esc_attr(get_term_link($tax_term, $taxonomy)) . '" title="' . sprintf( __( "View all posts in %s" ), $tax_term->id ) . '" ' . '>' . $tax_term->name.'</a></li>';
					?>
						<div class="menu-right-item <?php if($i==0){ echo 'active';}?>" id="<?php echo $tax_term->term_id;?>">
							<div class="menu-right-item-image"><img src="<?php if (function_exists('z_taxonomy_image_url')) echo z_taxonomy_image_url($tax_term->term_id); ?>" align="center"/ class="<?php if($i!=0){ echo 'grayscale';}?>"></div>
							<div class="menu-right-item-title"><?php echo $tax_term->name;?></div>
						</div>
					
				<?php $i++;} ?>
				</div>
			</div>
		</div>
	</div>
<?php get_footer();?>
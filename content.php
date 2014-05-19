			<div class="article clearfix " id="<?php echo $post->ID ?>">
				<div class="title-area clearfix">
					<div class="title">
						<h1 class=" article-title"><a href="<?php echo get_permalink( $post->ID ) ?>" title="<?php echo $post->post_title;?>"><?php echo $post->post_title;?></a></h1>
					</div>
					<div class="activity">
						<div class="author"><span>BY: <?php echo get_userdata($post->post_author)->display_name;?></span></div>
						<div class="date"><span><?php echo get_the_date('Y-m-d'); ?></span></div>
						<div class="share">
							<span>Share</span>
							<span><a  onclick="return !window.open(this.href, 'Facebook', 'width=640,height=300')" href="http://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink( $post->ID )?>" class="facebook"></a></span>
							<span><a  target="_blank" data-count="%d" title="Share on Twitter" href="http://twitter.com/share?text=<?php echo $post->post_title;?>&url=<?php echo get_permalink( $post->ID )?>" class="twitter btn btn-counter" rel="nofollow"></a></span>
						</div>
					</div>
				</div>
				<div class="featured-image">
					<a href="<?php echo get_permalink( $post->ID ) ?>" title="<?php echo $post->post_title;?>">
					<?php 
						if ( has_post_thumbnail()) {
							echo get_the_post_thumbnail($post->ID, 'press-image-large'); 
						}
					?>
					</a>
				</div>
				<div class="excert">
					<p><?php the_excerpt(); ?></p>
				</div>
				<div class="read clearfix"><a href="<?php echo get_permalink( $post->ID ) ?>" title="<?php echo $post->post_title;?>"><span>Continue Reading</span><span class="icon"></span></a></div>
			</div>
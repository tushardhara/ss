			<div class="article clearfix " id="<?php echo $post->ID ?>">
				<div class="back clearfix">
					<a href="<?php echo site_url('order-menu')?>"><span class="icon"></span><span>Back to Order Menu</span></a>
					<?php ss_post_nav() ?>
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
				<div class="title-area clearfix">
					<div class="title">
						<h1 class=" article-title"><a href="<?php echo get_permalink( $post->ID ) ?>" title="<?php echo $post->post_title;?>"><?php echo $post->post_title;?></a></h1>
					</div>
					<div class="activity">
						<div class="date"><span><?php echo get_the_date('Y-m-d'); ?></span></div>
						<div class="share">
							<span>Share</span>
							<span><a  onclick="return !window.open(this.href, 'Facebook', 'width=640,height=300')" href="http://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink( $post->ID )?>" class="facebook"></a></span>
							<span><a  target="_blank" data-count="%d" title="Share on Twitter" href="http://twitter.com/share?text=<?php echo $post->post_title;?>&url=<?php echo get_permalink( $post->ID )?>" class="twitter btn btn-counter" rel="nofollow"></a></span>
						</div>
					</div>
				</div>
				<div class="excert">
					<p><?php the_content(); ?></p>
				</div>
				<!--div class="show-comment"><span>Show comments</span><span class="icon"></span></div-->
				<div id="fb-root"></div>
				<script>(function(d, s, id) {
				  var js, fjs = d.getElementsByTagName(s)[0];
				  if (d.getElementById(id)) return;
				  js = d.createElement(s); js.id = id;
				  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=1432251907026193&version=v2.0";
				  fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));</script>
				<div class="fb-comments" data-href="<?php echo get_permalink( $post->ID )?>" data-width="960" data-numposts="5" data-colorscheme="light"></div>
			</div>
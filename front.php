<?php
/*
Template Name: Front Page
*/
get_header(); ?>
	<div class="main">		
		<div class="first-section clearfix" id="first-section">
			<div class="container clearfix">
				<div class="about-ss">
					<h1 class="big-title "><span>Who is</span><span>Sugar and Spice</span></h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc pharetra nulla sit amet arcu tincidunt, et eleifend mauris tempus. Etiam ac scelerisque turpis, at posuere.<br/><br/>
					Quisque nisl elit, accumsan a tristique non, elementum nec libero. Morbi imperdiet, lectus non cursus molestie, eros nisi accumsan odio, eget porta quam sem vitae risus.lectus non cursus molestie, eros nisi accumsan odio, eget porta quam sem vitae risus.<br/><br/>
					Quisque nisl elit, accumsan a tristique non, elementum nec libero. Morbi imperdiet, 
					</p>
				</div>
				<div class="wardrobe">
					<img src="<?php echo IMAGES?>/wardrobe.png" width="504" height="408" alt="menu" usemap="#menuMap">
					<map name="menuMap">
						<area shape="rect" coords="0,0,84,170" title="Word around town" alt="" href="<?php echo site_url('word-around-town');?>" >
						<area shape="rect" coords="304,217,384,268" title="Order Menu" alt="" href="<?php echo site_url('order-menu');?>" >
						<area shape="rect" coords="157,218,237,268" title="Contact Us" alt="" class="contact-go" href="#third-section" >
						<area shape="rect" coords="242,187,301,271" title="Main Menu" alt="" href="<?php echo site_url('our-menu');?>" >
						<area shape="rect" coords="387,182,492,268" title="About Us" alt="" href="" >
						<area shape="rect" coords="87,113,151,202" title="Photo Gallery" alt="" href="<?php echo site_url('gallery');?>" >
						<area shape="rect" coords="272,57,385,106" title="Home" alt="" href="<?php echo site_url();?>" >
					</map>
				</div>
			</div>
		</div>
		<div class="second-section">
			<div class="board">
				<img src="<?php echo IMAGES?>/board.jpg" class="center">
				<div class="absolute-container">
					<div class="col6">
						<h1 class="bigItemOfWeekText ">Item of The Week</h1>
						<h2 class="itemName "><a href="<?php echo get_field('item_url')?>"><?php echo get_field('item_of_the_week_item_name');?></a></h2>
						<div class="col12"><p class="excerpt"><?php echo get_field('item_of_the_week_item_description'); ?></p></div>
						<div class="col12">
							<div class="share">
								<span>Share</span>
								<span><a  onclick="return !window.open(this.href, 'Facebook', 'width=640,height=300')" href="http://www.facebook.com/sharer/sharer.php?u=<?php echo get_field('item_url')?>" class="facebook"></a></span>
							<span><a  target="_blank" data-count="%d" title="Share on Twitter" href="http://twitter.com/share?text=<?php echo $post->post_title;?>&url=<?php echo get_field('item_url')?>" class="twitter btn btn-counter" rel="nofollow"></a></span>
							</div>
						</div>
					</div>
					<div class="col6">
						<a href="<?php echo get_field('item_url')?>"><div class="featured-image-border">
							<img src="<?php echo get_field('item_of_the_week_item_image'); ?>">
							<div class="over"></div>
						</div></a>
					</div>
					
				</div>
			</div>
		</div>
		<div class="third-section" id="third-section">
			<div class="container clearfix">
				<h1 class="contact-title ">Contact Us</h1>
				<p class="contact-desc">orem ipsum dolor sit amet, consectetur adipiscing elit. Nunc pharetra nulla sit amet arcu tincidunt, et eleifend mauris tempus. Etiam ac scelerisque turpis, at </p>
				<div class="contact-area">
					<div class="address">
						<div class="location">
							<h1 class="location-text ">Lagoona Mall</h1>
							<div class="location-detail">
								<h6 class="location-detail-address ">13 Lorem Ipsum , Doha Qatar</h6>
								<h6 class="location-detail-phone ">+997 0123 45 78</h6>
							</div>
						</div>
						<div class="location">
							<h1 class="location-text ">Master Kitchen</h1>
							<div class="location-detail">
								<h6 class="location-detail-address ">13 Lorem Ipsum , Doha Qatar</h6>
								<h6 class="location-detail-phone ">+997 0123 45 78</h6>
							</div>
						</div>
						<div class="location">
							<h1 class="location-text ">Head Office</h1>
							<div class="location-detail">
								<h6 class="location-detail-address ">13 Lorem Ipsum , Doha Qatar</h6>
								<h6 class="location-detail-phone ">+997 0123 45 78</h6>
							</div>
						</div>
					</div>
					<div class="contact">
						<form id="contact-form" class="contact-form">
							<div class="textbox">
								<input type="text" name="name" placeholder="Name">
							</div>
							<div class="textbox">
								<input type="text" name="email" placeholder="Email">
							</div>
							<div class="textarea">
							<textarea name="message" placeholder="Message"></textarea>
							</div>
							<input type="submit" value="Send">
							<div class="success-message">Email has been sent!</div>
                                <div class="alert-message"></div>
                                <div class="error-message">Email could not be delivered. Please try again later!</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php get_footer();?>
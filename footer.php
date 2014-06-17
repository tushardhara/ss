<footer>
		<div class="container clearfix">
			<div class="footer-left">
                        <audio controls id='player_audio' autoplay loop>
                          <source src="<?php echo THEMEROOT?>/audio/stardust.ogg" type="audio/ogg">
                          <source src="<?php echo THEMEROOT?>/audio/stardust.mp3" type="audio/mpeg">
                          Your browser does not support the audio element.
                        </audio>
                        <div class="gramaphone"></div>
				<h1 class="footer-title ">Get our Daily News by joining our</h1>
				<?php wp_nav_menu( array( 'theme_location' => 'footer','container_class' => 'footer-nav','container' => 'nav','items_wrap'      => '%3$s') ); ?>
			</div>
			<div class="footer-right">
				<div class="social">
					<li><a href="https://twitter.com/sugarandspiceQA" target="_blank" class="twitter"></a></li>
					<li><a href="#" class="instragram"></a></li>	
					<li><a href="http://www.facebook.com/SugarandSpiceQatar" target="_blank" class="facebook"></a></li>		
				</div>
			</div>
		</div>
	</footer>
	<?php wp_footer();?>
	<?php
      if ( is_page('home') ) {?>
	<script type="text/javascript">
		(function($) {
			$('.contact-down a,.contact-bottom a').click( function(event) {        
		        event.preventDefault();
		        var href= $(this).attr('href').replace("http://ss.mizalabs.com/",'');
		        $.scrollTo(href,1000, { easing: 'swing' , offset: -1 , 'axis':'y' } );      
		  	});

		  	$('.contact-go').click( function(event) {        
		        event.preventDefault();
		        var href= $(this).attr('href').replace("http://ss.mizalabs.com/",'');
		        $.scrollTo( href ,1000, { easing: 'swing' , offset: -1 , 'axis':'y' } );      
		  	});
		  	$('.about-go a').click(function(event){
		  		event.preventDefault();
		  		var href= $(this).attr('href').replace("http://ss.mizalabs.com/",'');
		  		$.scrollTo( href ,1000, { easing: 'swing' , offset: -1 , 'axis':'y' } );
		  	});
		  	  /* placeholder fix for older browser */
            if( !Modernizr.csstransforms3d ) {
                  $('[placeholder]').focus(function() {
                        var input = $(this);
                        if (input.val() == input.attr('placeholder')) {
                              input.val('');
                              input.removeClass('placeholder');
                        }
                  }).blur(function() {
                        var input = $(this);
                        if (input.val() == '' || input.val() == input.attr('placeholder')) {
                              input.addClass('placeholder');
                              input.val(input.attr('placeholder'));
                        }
                  }).blur().parents('form').submit(function() {
                        $(this).find('[placeholder]').each(function() {
                              var input = $(this);
                              if (input.val() == input.attr('placeholder')) {
                                    input.val('');
                              }
                        })
                  });
            }
            

            /* form processing */
            $("#contact-form").submit(function(){
                  
                  $(this).find('[placeholder]').each(function() {
                        
                        var input = $(this);
                        if (input.val() == input.attr('placeholder')) {
                              input.val('');
                        }
                        
                  });
                  
                  var processor = "<?php echo get_template_directory_uri(); ?>/contact.php",
                        str = $(this).serialize();
                  
                  $("#contact-form .success-message, #contact-form .alert-message, #contact-form .error-message ").hide();
                  
                  $.ajax({
                           
                     type: "POST",
                     url: processor,
                     data: str,
                     success: function(data) {
                              
                              //console.log(data);
                              $("#contact-form").append('<span class="feedback"></span>');
                                                   
                              if(data === 'OK') {
                              
                                    $("#contact-form .success-message").fadeIn();
                                    $("#contact-form").each(function(){
                                          this.reset();
                                    });
                                
                              } else if (data === 'ERROR') {
                              
                                    $("#contact-form .error-message").fadeIn();
                              
                              } else {
                                    
                                    $("#contact-form .alert-message").fadeIn().html( data );
                                    
                              }
                           
                     }
                           
                  });
            
                  return false;
                  
            });
		  })(jQuery);
	</script>
	<?php } ?>
</body>
</html>
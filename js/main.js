(function($) {
	$(".menu-toggle-icon").on('click',function(){
		if($(this).parent().parent().parent().hasClass('active')){
			$(this).parent().parent().parent().removeClass('active');
			$(this).removeClass('active');
			$(this).parent().parent().children('.order-menu-items').removeClass('active');
		}else{
			$(this).parent().parent().parent().addClass('active');
			$(this).addClass('active');
			$(this).parent().parent().children('.order-menu-items').addClass('active');
		}
	});
	$(".menu-right-item").on('click',function(){
		var selectedID=$(this).attr('id');
		$( ".menu-right-item").removeClass('active');
		$(this).addClass('active');
		$(".menu-right-item").find('img').addClass('grayscale');
		$(this).find('img').removeClass('grayscale');
		$( ".menu-group-box" )
		  .removeClass('active')
		  .filter(function( index ) {
		    return $(this).attr('id') == selectedID;
		  }).addClass('active');
	});
	var $container=$('#loop');
	$container.infinitescroll({
      navSelector  : '.page-previous',    // selector for the paged navigation 
      nextSelector : '.page-previous a',  // selector for the NEXT link (to page 2)
      itemSelector : '.article',     // selector for all items you'll retrieve
      loading: {
          finishedMsg: 'No page to load',
          img: 'http://i.imgur.com/PHGwVV7.gif'
        }
      }
    );
    $('#gallery').mixitup();
   
})(jQuery);
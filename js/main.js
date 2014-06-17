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
    var $gcontainer=$('#gallery');
	$gcontainer.infinitescroll({
      navSelector  : '.wp-pagenavi',    // selector for the paged navigation 
      nextSelector : '.wp-pagenavi a.nextpostslink',  // selector for the NEXT link (to page 2)
      itemSelector : '.gallery-group',     // selector for all items you'll retrieve
      loading: {
          finishedMsg: 'No page to load',
          img: 'http://i.imgur.com/PHGwVV7.gif'
        }
      }
    );
    $('#gallery').mixitup();
    var value = $.jStorage.get("music");
	if(value=='off'){
		var audio=document.getElementById("player_audio");
		audio.pause();
	}

    $('.gramaphone').on('click',function() {
	  var audio=document.getElementById("player_audio");
	  if (audio.paused == false) {
	      audio.pause();
	      console.log('music paused');
	      $.jStorage.set("music",'off');
	  } else {
	      audio.play();
	      console.log('music playing');
	      $.jStorage.set("music",'on');
	  }
	});
	
	var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
		showLeftPush = document.getElementById( 'showLeftPush' ),
		body = document.body;
	showLeftPush.onclick = function() {
		classie.toggle( this, 'active' );
		classie.toggle( body, 'cbp-spmenu-push-toright' );
		classie.toggle( menuLeft, 'cbp-spmenu-open' );
		disableOther( 'showLeftPush' );
	};
	function disableOther( button ) {
		if( button !== 'showLeftPush' ) {
			classie.toggle( showLeftPush, 'disabled' );
		}
	}
})(jQuery);
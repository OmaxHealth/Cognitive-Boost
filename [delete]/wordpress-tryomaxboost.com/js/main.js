var $=jQuery;
var WPTHEME = '/wp-content/themes/mind_omaxhealth_v1/';
var DOMAIN = location.protocol + "//" + location.host;

/* jQuery Constructor: Page Listener */
jQuery(document).ready(function($){	
	
	initMobileNav();
	initVideo();
	
	if (isPage('faq')){
		initFAQ();
	}
	
});

// ===================================================================
// FAQ Expand Box
// ===================================================================
function initFAQ(){
	
	$('#faq article .question').click(function(){
		var group = $(this).closest('article');
		var answer = group.find('.answer');
		
		if (group.hasClass('open')){
			answer.slideUp(400, function(){
				group.removeClass('open');
			});
		} else {
			answer.slideDown(400, function(){
				group.addClass('open');
			});
		}
	});

}


// ===================================================================
// Global Function to load video library
// ===================================================================
function initVideo(){
	
	$("section .video").each(function(){
		if ($(this).data('id')){
			var outerBlock = $(this);
			var placeholder = $(".overlay",this);
			var videoID = $(this).data('id');
			var player = $(" .player",this);
			player.tubeplayer({
				initialVideo: videoID,
				protocol: 'https',
				modestbranding: false,
				autoPlay: false, 
				onPlayerEnded: function(){
					outerBlock.removeClass('playVideo');
				}
			});
			
			placeholder.click(function(){
				outerBlock.addClass('playVideo');
				player.tubeplayer("play");
			});						
		}
	});

}


// ===================================================================
// Global Function to control mobile navigation
// ===================================================================
function initMobileNav(){
	$('header nav.menu svg.button').click(function(){
		var navMobile = $(this).parent();
		if (navMobile.hasClass('open')){
			navMobile.removeClass('open');
		} else {
			navMobile.addClass('open');
		}
	});
}


// ===================================================================
// Global Function to tell what page is viewed based on body class/ID
// ===================================================================
function isPage(a){

	if($('main#'+a).length){return true;}
	else if ($('body').hasClass(a)){return true;}
	else if ($('body').hasClass('page-'+a)){return true;}
	else{return false;}

}
//var jQuery = jQuery.noConflict();
jQuery.fn.equalHeight=function() {
	var tallest = 0;
	var group =jQuery(this);
	group.css({'height':'auto'});
	group.each(function() {
		var thisHeight = jQuery(this).height();
		if(thisHeight > tallest) {
			tallest = thisHeight;
		}
	});
	group.height(tallest);
}

jQuery.fn.resizeAll=function(){
	jQuery('.footer').css({'height':'auto'});
	var fHeight=jQuery('.footer').height();
	jQuery('.footer-push').height(fHeight);
	jQuery('.wrapper').css({'margin-bottom':'-'+fHeight+'px'});
};

jQuery(document).ready(function(){
	jQuery('body').scrollToTop();
	jQuery().resizeAll();
	
	jQuery(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
		event.preventDefault();
		return jQuery(this).ekkoLightbox();
	});
	
	jQuery(window).bind('load',function(){
		jQuery('.services-grid .thumbnail').equalHeight();			
	});
	
	jQuery(window).bind('resize',function(){
		var resizeId;
		clearTimeout(resizeId);
		resizeId = setTimeout(function(){
			jQuery('.services-grid .thumbnail').equalHeight();
			jQuery().resizeAll();	
		}, 500);		
	});	

	if("onorientationchange" in window){
		window.addEventListener("orientationchange", function() {
			jQuery('.services-grid .thumbnail').equalHeight();
			jQuery().resizeAll();
		}, false);
	}		
});

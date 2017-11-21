jQuery(function() {
	jQuery('.container > .row').addClass('fadeIn');
});

jQuery(document).ready(function() {
    jQuery(window).resize(function() {
    	jQuery('.mask').each(function(index){
    		if (jQuery(jQuery(this).next()[0].children[0]).is(':visible')) {
				// lookup the height of the image in the paragraph and set mask to that
    			var imageHeight = jQuery(jQuery(this).next()[0].children[0]).height();			
        		jQuery(this).height(imageHeight);
    		}  
    		else
    		 	jQuery(this).height(200);
    	});        
    }).resize();
});

jQuery(document).ready(function() {    
	//var counter = 3;
    /* Every time the window is scrolled ... */
    jQuery(window).scroll( function(){
    	//if (counter){
    		/* Check the location of each desired element */
	        jQuery('.mask').each( function(i){            
	            var bottom_of_object = jQuery(this).offset().top + (jQuery(this).outerHeight() / 2);
	            var bottom_of_window = jQuery(window).scrollTop() + jQuery(window).height();
	            
	            /* If the object is completely visible in the window, fade it it */
	            if( bottom_of_window > bottom_of_object ){               
	                //$(this).animate({'opacity':'1'},500); TODO use for upcoming/form
	                jQuery(this).removeClass('maskInit');
	                //counter--;                    
	            }            
	        });     	
    	//}           
    });    
});


$(document).ready(function() {

	/*$('body').videoBG({
			position:"fixed",
			zIndex:0,
			mp4:'background.mp4',
			ogv:'background.ogv',
			webm:'background.webm',
			opacity:1
		});
*/		
     
     
     
	// Intro animation
	
	
      $('#slideshow p:nth-child(1)').fadeIn(1000, function(){
	    $(this).animate({marginLeft: "-200px", opacity: 0 },1000, function(){
	      $(this).hide();
	 		$('#slideshow p:nth-child(2)').show("slide" , { direction: "right" },1000, function(){
	 		 $(this).animate({marginLeft: "-200px", opacity: 0 },1000, function(){
	           $(this).hide();
	 			$('#slideshow p:nth-child(3)').show("slide",{ direction: "right" }, 1000, function(){
	 			  $(this).animate({marginLeft: "-200px", opacity: 0 },1000, function(){
	                 $(this).hide();
	                 
	                          $('body').videoBG({
			                  position:"fixed",
			                  zIndex:0,
			                  mp4:'background.mp4',
		                      ogv:'background.ogv',
			                  webm:'background.webm',
			                  opacity:0
			                  });

	                 
	 				 $('#image img').fadeIn(2000, function() {
	 				  		 
	 				    $(this).fadeOut(1000, function(){
	 				    
	 				     	          			                  
                     $(".videoBG").animate({opacity: 1},2000);
                     

	 				      $('#rectangle').fadeIn(500, function(){
	 				      
	 				        $('#image2 img').fadeIn(500, function(){
	 				        
	 				             $('#titulo').fadeIn(500, function(){
	 				               
	 				                $('#content').show();
	 				             
	 				                })
	 				        
	 				               })	 				        
	 				             })
                               })
	 						})
						})
 				    })
				})
			})
	 	})
	})
})





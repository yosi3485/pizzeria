$ = jQuery.noConflict();

$(document).ready(function() {

	$('.menu-mobile a').on('click', function (){
		$('.menu-site').toggle("slow");
	});


	var breakpoint = 768;

	$(window).resize(function(){

		adjustBoxes();
		
		if ($(document).width() >= breakpoint) {
			$('nav.menu-site').show();
		}else {
			$('nav.menu-site').hide();
		}
	});

	//Adjust image boxes

	adjustBoxes();

	function adjustBoxes(){

		var imagesBox = $('.image-box');
		
		if(imagesBox.length > 0) {
			var imageH = imagesBox[0].height;
			var boxesD = $('div.description-box');
			$(boxesD).each(function(i, elemento){
				$(elemento).css({'height' : imageH +'px'});
			});
		}

	}
	

});
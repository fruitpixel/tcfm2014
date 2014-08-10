;jQuery(function($){

	$('.twitter-updates').attr( 'data-cycle-slides', 'li');

	$(document).foundation({
		equalizer : {
			// Specify if Equalizer should make elements equal height once they become stacked.
			equalize_on_stack: false
		}
	});

});
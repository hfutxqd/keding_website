$(function(){
	$('#slides').slides({
		preload: false,
		play: 5000,
		pause: 2500,
		hoverPause: true,
		animationStart: function(){
			$('.caption').animate({
				bottom:-35
			},100);
		},
		animationComplete: function(current){
			$('.caption').animate({
				bottom:0
			},200);
			if (window.console && console.log) {
				// example return of current slide number
				console.log(current);
			};
		}
	});
});
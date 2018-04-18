
$(window).scroll(function() {

var windowHeight = $(window).height(),
	windowScrollTop = $(window).scrollTop() + 1;
var section2 = $("section#section-2"),
	section2offsetTop = section2.offset().top,
	section2Height = section2.height();
	

var documentHeight = $(document).height();
var section2DivBackground = $("div#background");
var PenDiv = $("div#pen-div1");
var Pen = $("img#pen");
var PenDiv3 = $("div#pen-div3");


		var scrollPercent = (windowScrollTop / (documentHeight - windowHeight)) * 100;
		var section2scrollPercent = ((windowScrollTop - windowHeight) / (6.5 * windowHeight)) * 100 ;


	if (windowScrollTop < windowHeight) {
		section2DivBackground.css({	'position': 'relative',
									'top': '0'
									});
		Pen.css({
			'display': 'none'
		});
		console.log('pierwsza');
		console.log(section2scrollPercent);
	} else if ((windowScrollTop >= windowHeight) && (windowScrollTop <= 7.5 * windowHeight)) {	//	section 2 -> PLAY!
			section2DivBackground.css({	'position': 'fixed',
										'top': '0'
										});
			PenDiv.css({
				'transform': 'translateY(' + -1 * section2scrollPercent + '%)'
			});
			PenDiv3.css({
				'transform': 'translateY(' + -1 * section2scrollPercent + '%)'
			});
			var PenScaleXY = 50/section2scrollPercent;
			//			just PEN SCALE start 	 ->
			if (section2scrollPercent <= 95 ) {
					if (section2scrollPercent > 16.66) {
						Pen.css({
							'transform': 'scale(' + PenScaleXY + ')',
							'display': 'block'
						});
					} else {
						Pen.css({
							'transform': 'scale(' + 5.2 / Math.sqrt(PenScaleXY) + ')',
							'display': 'block'
						});
					}
			} else {
					Pen.css({
						'transform': 'scale(0.5)',
						'display': 'block'
					});
			//			--> finish PEN SCALE 
			}
	
			console.log(section2scrollPercent);
			console.log("D R U G A ");

	} else if (windowScrollTop > 7.5 * windowHeight) {
		section2DivBackground.css({	'position': 'relative',
									'top': '650vh'
									});
		
		console.log('trzecia');
	}

/*







		section2.css({'position':'', 'top': ''});
		penHeight = pen.height();
		pen.css({
			'margin-top': 'calc(100vh - ' + penHeight + 'px)',
			'height': 'calc(30vh - ' + 0.03* $(window).scrollTop() + 'px)'
		});
		console.log('height: ' + pen.height());


		if ($(window).height() <= 2.3 * $(window).scrollTop()) {
			pen.css({'height': '5vh'});
			console.log('!!!230Window scrolltOP: ' + $(window).scrollTop());
		} else {
			pen.css({'height': ''});
		}




	} else {
		section2.css({ 'top': '0'});
	}
	


	var	penOffsetTop		= $("#pen" ).offset().top,
		penPositionTop		= $("#pen" ).position().top,
	//	penOffsetTopRound 	= Math.round(penOffsetTop),
		windowScrollTop		= $(window).scrollTop(),
		distance      		= Math.round(penPositionTop - windowScrollTop),
		
		speedAtt 			= pen.attr('data-speed');


	// console.log(distance);
	// console.log("windowHeight: " + windowHeight);

if (distance <= windowHeight) {
	var YMove = Math.round(windowScrollTop + windowHeight - penPositionTop) * speedAtt;



	
	scaleAmt = 1.0 + (distance / 50);
	pen.css({
		'transform': 'translateY(' + YMove + 'px)',
		//'width':'calc(10vw + ' + distance/30 + 'vw)',
		
		// '-webkit-transform': 'translate3d(0, ' + YMove + 'px, 0)',
		// 'transform': 'translate3d(0, ' + YMove + 'px, 0)'

	});
	// pen.css(
		// 'width':'calc(10vw + ' + distance/30 + 'vw)',
		//'transform': 'scaleY(1/' + distance/30 + ')',
		// 'height' : distance/2,
		// 'transform', 'scale(5deg)');

		// 'transform': 'scaleY(0.7)'}, 400);

	// rotateZ(-14deg)'}, 1000);
	
}

*/
}).scroll();
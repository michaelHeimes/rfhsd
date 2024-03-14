$(document).ready(function(){
	headerText();
	$('.onload-fadein').animate({opacity:1},333);
	
	if( $('.venobox-img').length ) {
		new VenoBox({
			selector: '.venobox-img',
			numeration: true,
			infinigall: true,
			fitView: true,
			share: false,
			overlayColor: 'rgba(255,255,255,0.85)',
			toolsColor: '#4A5B69',
			spinner: 'plane',
			spinColor: '#BAC20E'
		});
	}
	
});

$(window).scroll(function() {
	var spos = $(window).scrollTop();
	var winhi = $(window).height();
	var headhi = $('header').height();
	if (spos > 0) {
		$('header#masthead').addClass('fixie');
	} else {
		$('header#masthead').removeClass('fixie');
	}
});

function headerText(){
	$('#headertext').load('/wp-content/themes/rfhsd/headertext.html', function(){
		var hani1 = setTimeout(function(){
			$('.headertext span.stage1').addClass('reveal');
		},500);
		var hani1a = setTimeout(function(){
			$('.headertext span.stage1a').addClass('reveal');
		},700);
		var hani2 = setTimeout(function(){
			$('.headertext span.stage2').addClass('reveal');
		},1000);
		var hani3 = setTimeout(function(){
			$('.headertext span.stage3').addClass('reveal');
		},1300);
		var hani4 = setTimeout(function(){
			$('.headertext span.stage4').addClass('reveal');
		},1700);
		var hani5 = setTimeout(function(){
			$('.headertext span.stage5').addClass('reveal');
		},2000);
		var hani6 = setTimeout(function(){
			$('.headertext span.stage6').addClass('reveal');
		},2700);
		var hani7 = setTimeout(function(){
			$('.headertext span.stage7').addClass('reveal');
		},3000);
		var hani8 = setTimeout(function(){
			$('.headertext span.stage8').addClass('reveal');
		},3300);
		var hani9 = setTimeout(function(){
			$('#adviseraward').addClass('lit');
		},4000);
	});
}

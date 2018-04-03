document.addEventListener('DOMContentLoaded', DOMListo)
function DOMListo (){
$(window).scroll('scrollTop',function(){    
 	if($(window).scrollTop()>150) {
  	$('nav').addClass('cambioFondoNav')
  	$('.nav-link').addClass('cambioColor')
      } else{
  	$('nav').removeClass('cambioFondoNav')
  	$('.nav-link').removeClass('cambioColor')
      }
  })

$('.ir-arriba').click(function(){
		$('body, html').animate({
			scrollTop: '0px'
		}, 1000);
	});
 
	$(window).scroll(function(){
		if( $(this).scrollTop() > 550 ){
			$('.ir-arriba').slideDown(1000);
		} else {
			$('.ir-arriba').slideUp(1000);
		}
	});
}

$("a[rel='m_PageScroll2id']").mPageScroll2id({
  highlightClass: "active"
});

$('.mpopup').magnificPopup();


$('.phoneidcl').inputmask('+38(999) 999-99-99',{ "oncomplete": function(){ 
  $(".disbutt").prop("disabled", false);
}, "onincomplete": function(){ $(".disbutt").prop("disabled", true); } });



$(document).ready(function(){
  $('.order-main').submit(function(e){
      e.preventDefault();
      $.magnificPopup.close(); 
      $(".disbutt").prop("disabled", true);
      $.ajax({
          type:'POST',
          url:'/wp-content/themes/sad/tele_order.php',
          data: $(this).serialize()
      }).done(function(){
              $.magnificPopup.close(); 
          setTimeout(function(){
              window.location = 'done';
          },1);
      });
      });
});

$(document).ready(function() {
	$('.popup-youtube').magnificPopup({
		type: 'iframe',
		mainClass: 'mfp-fade',
		removalDelay: 160,
		preloader: false,
		fixedContentPos: false
	});
});

$('.revolution__slider').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 7000,
  speed: 1000,
  dots: true,
  arrows: true,
  pauseOnFocus: false,
  pauseOnHover: false,
  infinite: true,
  accessibility: false,
  prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-caret-left"></i></button>',
  nextArrow: '<button type="button" class="slick-next"><i class="fas fa-caret-right"></i></button>',
});

$('.rev__slider').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 7000,
  speed: 1000,
  dots: true,
  arrows: true,
  pauseOnFocus: false,
  pauseOnHover: false,
  infinite: true,
  accessibility: false,
  prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-caret-left"></i></button>',
  nextArrow: '<button type="button" class="slick-next"><i class="fas fa-caret-right"></i></button>',
});
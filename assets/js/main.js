
$(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 300) {
        $(".footer-fix-btn").addClass("fbcome");
    } else {
        $(".footer-fix-btn").removeClass("fbcome");
    }
});





$('.counter').countUp({
	  'time': 3000,
	  'delay': 50
	});

$('.navbar-nav>li>a').on('click', function(){
    $('.navbar-collapse').collapse('hide');
});




$(function() {
  /*var h1Height = $('header').height();*/ // get height of h1 tag
  $('.nav-link').click(function (e) {
      e.preventDefault();
      var target = $(this.hash);
      $('html, body').animate({
          scrollTop: target.offset().top // scroll to h3 minus height of h1
      }, 1000);
      return false;
  });
});
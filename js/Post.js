$(window).scroll(function () {
    var scroll = $(window).scrollTop();
    $(".zoom img").css({
        transform: 'translate3d(-50%, -' + (scroll / 100) + '%, 0) scale(' + (100 + scroll / 5) / 100 + ')',
        "-webkit-filter": "blur(" + (scroll / 200) + "px)",
        filter: "blur(" + (scroll / 200) + "px)"
    });
});

function scrollNav() {
    $('.nav a').click(function(){
      $(".active").removeClass("active");     
      $(this).addClass("active");
      
      $('html, body').stop().animate({
        scrollTop: $($(this).attr('href')).offset().top - 160
      }, 300);
      return false;
    });
  }
  
  scrollNav();
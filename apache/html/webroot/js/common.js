// TODO: webpack化する
$(".header__icon").click(function () {
  $(this).toggleClass('active');
  $(".header__nav").toggleClass('active');
  $(".header__nav").fadeToggle();
  $(".sp-cover").toggleClass('active');
  $(".sp-cover").fadeToggle();
});

$(function(){
   $('a[href^="#"]').click(function() {
     	var headerHight = 100;
      var speed = 400;
      var href= $(this).attr("href");
      var target = $(href == "#" || href == "" ? 'html' : href);
      var position = target.offset().top-headerHight;
      $('body,html').animate({scrollTop:position}, speed, 'swing');
      return false;
   });
});

$(document).ready(function(){
  $('.carousel').slick({
    dots: true,
    arrows: false
  });

  $('#functionality li > a').click(function() {
    var name = $(this).attr('name');
    $('.func-slide').hide();
    $('.' + name).show();
    return false;
  });

  $('#mobile-nav-icon').click(function() {
    $('#navigation').slideToggle();
    return false;
  });

  $('#request-holiday').click(function() {
    $('#feature-video-file').get(0).play();
    return false;
  });
});

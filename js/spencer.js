$(document).ready(function(){
 	$('#navigation a').click(function(e){
			$("html, body, document").animate({
					scrollTop: $('#nav-' + $.attr(this, 'href').substr(1)).offset().top
			}, 500);
			return false;
	});

  $('.carousel').slick({
    dots: true,
    arrows: false
  });

  $('#functionality li > a').click(function() {
    $('#functionality li a').removeClass('active');
    var name = $(this).attr('name');
    $(this).addClass('active');
    $('.func-slide').hide();
    $('.' + name).show();
    return false;
  });

  $('#mobile-nav-icon').click(function() {
    $('#navigation').slideToggle();
    return false;
  });

  $('.func-video-button').click(function() {
    url = $(this).attr('name');
    player = $('#feature-video-player').get(0);
    source = $('#feature-video-source').get(0);

    player.pause();

    source.src = 'video/' + url + '.mp4';

    player.load();
    player.play();
    
    return false;
  });

  $('.ref-nav').click(function() {
    $('.ref-nav').removeClass('active');
    $(this).addClass('active');
    refName = $(this).attr('id');

    $('.ref-container').hide();
    $('#' + refName + '-container').show();

    return false;
  })
});

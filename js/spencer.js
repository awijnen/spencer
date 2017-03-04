$(document).ready(function(){
  $('header').headroom({
		"offset": 205,
		"tolerance": 5,
		"classes": {
			"initial": "animated",
			"pinned": "slideDown",
			"unpinned": "slideUp"
		}
	});

	$('#play-video').click(function() {
		$.fancybox({
			'padding'		: 0,
			'transitionIn'	: 'none',
			'transitionOut'	: 'none',
			'title'			: this.title,
			'autoSize' : false,
      'scrolling' : 'auto',
      'fitToView' : true,
			'href'			: this.href,
			'type'			: 'iframe'
		});

		return false;
	});

 	$('.nav-item').on('click', function(){
    var loc = $(this).attr('href');

    $('#navigation').slideUp(400, function() {
      $("html, body, document").animate({
        scrollTop: $(loc).offset().top
      }, 500);
    });
        
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
    $('#feature-video').removeClass();
    $('#feature-video').addClass(name);
    
    player = $('#feature-video-player').get(0);
    source = $('#feature-video-source').get(0);
    player.pause();
    source.src = '';
    player.load();

    $('.func-slide').hide();
    $('.' + name).show();
    return false;
  });

  $('#mobile-nav-icon').click(function() {
    $('#navigation').slideToggle();
    return false;
  });

  $('.func-video-button').click(function() {
		if(window.screen.availWidth > 991) {
			url = $(this).attr('name');
			player = $('#feature-video-player').get(0);
			source = $('#feature-video-source').get(0);

			player.pause();

			source.src = 'video/' + url + '.mp4';

			player.load();
			player.play();
			
			return false;
		}
  });

  $('.ref-nav').click(function() {
    $('.ref-nav').removeClass('active');
    $(this).addClass('active');
    refName = $(this).attr('id');

    $('.ref-container').hide();
    $('#' + refName + '-container').show();

    return false;
  });

	$('#send-demo').click(function() {
		var data = {
			name: $("#input-name").val(),
			company: $("#input-company").val(),
			employees: $("#input-employees").val(),
			funct: $("#input-funct").val(),
			email: $("#input-email").val(),
		};

    error = 0;
    $('#nav-contact input').each(function() {
      $(this).removeClass('error');
      if($(this).val() == '') {
        error = 1;
        $(this).addClass('error');
      }
    });
		
    if(error == 0) {
      $.ajax({
        type: "POST",
        url: "mail.php",
        data: data,
        success: function(response) {
          if(response == 1) {
            $('.unfinished').fadeOut(400, function() {
              $('.finished').fadeIn();
              $('#nav-contact input').each(function() {
                $(this).val('');
              });
            });
          }
        }
      });
    }
		
		return false;
	});

  $('#send-another').click(function() {
     $('.finished').fadeOut(400, function() {
      $('.unfinished').fadeIn();
    });

    return false;
  })
});

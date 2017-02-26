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

 	$('.nav-item').click(function(e){
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
  });

	$('#send-demo').click(function() {
		var data = {
			name: $("#input-name").val(),
			company: $("#input-company").val(),
			employees: $("#input-employees").val(),
			funct: $("#input-funct").val(),
			email: $("#input-email").val(),
		};
		
		$.ajax({
		  type: "POST",
			url: "mail.php",
			data: data,
			success: function(response) {
        //$('.success').fadeIn(1000);
				console.log(response);
     	}
		});
		
		return false;
	});
});

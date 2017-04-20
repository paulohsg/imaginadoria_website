var flag = false;

$(document).ready(function(){


	var waypoint = new Waypoint({
	  element: document.getElementById('logovo-text'),
      
	  handler: function(direction) {
	    if(direction == 'up'){
	    	$('#logovo-navbar').addClass('animated flipOutX');
	    		$('#logovo-navbar').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){

		    		$(this).removeClass('animated flipOutX');
			     	$('#logovo-list').css("display", "none");
			     	$("#normal-list").css("display", "block");

			     	$('.toLeft').addClass('animated fadeIn').stop();
			     	$('.toLeft').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
			     		$(this).removeClass('animated fadeIn');
			     	});

			     	$('.toRight').addClass('animated fadeIn').stop();
			     	$('.toRight').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
			     		$(this).removeClass('animated fadeIn');
			     	});

	    		});

	    	$('#top-button').addClass('animated flipOutX').stop();
		     		$('#top-button').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
		     			$(this).removeClass("animated flipOutX");
		     			$('#top-button').css("display", "none");

		     		});

    }else{
    	$('.toLeft').addClass('animated fadeOut');
        $('.toLeft').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){

     		$(this).removeClass("animated fadeOut");
     		$('#normal-list').css("display", "none");
     		$('#logovo-list').css('display', 'block');
     		$('#logovo-navbar').addClass('animated flipInX').stop();
     		$('#logovo-navbar').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
     			$(this).removeClass("animated flipInX");

     		});

     		$('#top-button').css("display", "block");
     		$('#top-button').addClass('animated flipInX').stop();
     		$('#top-button').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
     			$(this).removeClass("animated flipInX");

     		});
     	});

     	$('.toRight').addClass('animated fadeOut');
     	$('.toRight').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
     		//$(this).css("display", "none");
     		$(this).removeClass("animated fadeOut");
     	});
    }
  },
  offset: 300

});


    var waypoint = new Waypoint({
      element: document.getElementById('myCarousel'),

      handler: function(direction) {
        if(direction == 'up'){
      		$('#current-session-label').addClass('animated flipOutX').stop();
	     	$('#current-session-label').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
	     		$(this).removeClass("animated flipOutX");

	     		$('#current-session-label').css('display', 'none');

	     	});

      	}else{
      		$('#current-session-label').css('display', 'block');
      		$('#current-session-label span').text('PERFIL');
      		$('#current-session-label').addClass('animated flipInX').stop();
	     	$('#current-session-label').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
	     		$(this).removeClass("animated flipInX");

	     	});
      	}

      },
      offset: 300

  });

    var waypoint = new Waypoint({
      element: document.getElementById('services'),

      handler: function(direction) {

      	if(direction == 'up'){
      		$('#current-session-label').addClass('animated flipOutX').stop();
	     	$('#current-session-label').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
	     		$(this).removeClass("animated flipOutX");

	     		$('#current-session-label span').text('PERFIL');

	     		$('#current-session-label').addClass('animated flipInX').stop();
	     		$('#current-session-label').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
	     			$(this).removeClass("animated flipInX");

	     		});

	     	});

      	}else{
      		$('#current-session-label').addClass('animated flipOutX').stop();
	     	$('#current-session-label').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
	     		$(this).removeClass("animated flipOutX");

	     		$('#current-session-label span').text('SERVIÇOS');

	     		$('#current-session-label').addClass('animated flipInX').stop();
	     		$('#current-session-label').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
	     			$(this).removeClass("animated flipInX");

	     		});

	     	});
      	}

      },
      offset: 300

  });



    var waypoint = new Waypoint({
      element: document.getElementById('portfolio'),

      handler: function(direction) {

      	if(direction == 'up'){
      		$('#current-session-label').addClass('animated flipOutX').stop();
	     	$('#current-session-label').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
	     		$(this).removeClass("animated flipOutX");

	     		$('#current-session-label span').text('SERVICES');

	     		$('#current-session-label').addClass('animated flipInX').stop();
	     		$('#current-session-label').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
	     			$(this).removeClass("animated flipInX");

	     		});

	     	});

      	}else{
      		$('#current-session-label').addClass('animated flipOutX').stop();
	     	$('#current-session-label').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
	     		$(this).removeClass("animated flipOutX");

	     		$('#current-session-label span').text('PORTFOLIO');

	     		$('#current-session-label').addClass('animated flipInX').stop();
	     		$('#current-session-label').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
	     			$(this).removeClass("animated flipInX");

	     		});

	     	});
      	}

      },
      offset: 300

  });



    var waypoint = new Waypoint({
      element: document.getElementById('contact'),

      handler: function(direction) {

      	if(direction == 'up'){
      		$('#current-session-label').addClass('animated flipOutX').stop();
	     	$('#current-session-label').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
	     		$(this).removeClass("animated flipOutX");

	     		$('#current-session-label span').text('PORTFOLIO');

	     		$('#current-session-label').addClass('animated flipInX').stop();
	     		$('#current-session-label').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
	     			$(this).removeClass("animated flipInX");

	     		});

	     	});

      	}else{
      		$('#current-session-label').addClass('animated flipOutX').stop();
	     	$('#current-session-label').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
	     		$(this).removeClass("animated flipOutX");

	     		$('#current-session-label span').text('CONTATOS');

	     		$('#current-session-label').addClass('animated flipInX').stop();
	     		$('#current-session-label').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
	     			$(this).removeClass("animated flipInX");

	     		});

	     	});
      	}

      handler: function() {
        $('#current-session-label').css('display', 'block');
        $('#current-session-label span').text('PERFIL');

      },
      offset: 200

  });


	$('#img-logovo-navbar').on('click', function() {


		if($(this).attr('src') == "img/logovo.png"){
			$(this).fadeOut(300, function() {
		        $(this).attr("src","img/logovo_broken.png");
		        $(this).fadeIn(300);
		    });
		}else{
			$(this).fadeOut(300, function() {
		        $(this).attr("src","img/logovo.png");
		        $(this).fadeIn(300);
		    });
		}

	});


	$('.dropdown').on('show.bs.dropdown', function(e){
	  $(this).find('.dropdown-menu').first().stop(true, true).slideDown(500);
	});

	// Add slideUp animation to dropdown
	$('.dropdown').on('hide.bs.dropdown', function(e){
	  $(this).find('.dropdown-menu').first().stop(true, true).slideUp(500);
	});


});




$(document).ready(function() {
        $(document).delegate('.responsive-navbar-button', 'click', function(event){
            $(this).addClass('oppenned');
            event.stopPropagation();
        })
        $(document).delegate('body', 'click', function(event) {
            $('.responsive-navbar-button').removeClass('oppenned');
        })
        $(document).delegate('.cls', 'click', function(event){
            $('.responsive-navbar-button').removeClass('oppenned');
            event.stopPropagation();
        });
    });



$(window, document, undefined).ready(function() {

  $('input').blur(function() {
    var $this = $(this);
    if ($this.val())
      $this.addClass('used');
    else
      $this.removeClass('used');
  });

  var $ripples = $('.ripples');

  $ripples.on('click.Ripples', function(e) {

    var $this = $(this);
    var $offset = $this.parent().offset();
    var $circle = $this.find('.ripplesCircle');

    var x = e.pageX - $offset.left;
    var y = e.pageY - $offset.top;

    $circle.css({
      top: y + 'px',
      left: x + 'px'
    });

    $this.addClass('is-active');

  });

  $ripples.on('animationend webkitAnimationEnd mozAnimationEnd oanimationend MSAnimationEnd', function(e) {
  	$(this).removeClass('is-active');
  });

});


$(document).ready(function() {

	$('.button-form').on({
	    'mouseenter':function(){
	        $('.button-form-arrow').css('visibility', 'visible');
        	$('.button-form-arrow').addClass('animated rotateIn');
        	$('.button-form-arrow').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){

		    		$('.button-form-arrow').removeClass('animated rotateIn');
		    });

	    },'mouseleave':function(){
	        $('.button-form-arrow').addClass('animated rotateOut');

	        $('.button-form-arrow').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){

		    		$('.button-form-arrow').removeClass('animated rotateOut');
		    		$('.button-form-arrow').css('visibility', 'hidden');
		    });
	    }
	});


	$('.icon-social-media').on({

		'mouseenter':function(){
			$(this).addClass('animated swing');
		},
		'mouseleave':function(){
			$(this).removeClass('animated swing');
		}


	})

});

function open_eduardo_profile(){
	if($('#profile-eduardo').hasClass('profile-eduardo-open')){
     	$('#profile-eduardo-description').addClass('animated fadeOut').stop();
     	$('#profile-eduardo-description').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
     		$(this).removeClass("animated fadeOut");
     		$('#profile-eduardo-description').css("display", "none");

     		$('#profile-eduardo').removeClass("profile-eduardo-open");
			$('#profile-eduardo').addClass("profile-eduardo-closed");

     		$('#container-profile-paulo').css('display', 'block');

     		$('#profile-paulo').addClass('animated fadeIn').stop();
     		$('#profile-paulo').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
     			$(this).removeClass("animated fadeIn");
     		});

     	});

	}else{
		$('#profile-eduardo').removeClass("profile-eduardo-closed");
		$('#profile-eduardo').addClass("profile-eduardo-open");

     		$('#profile-paulo').addClass('animated fadeOut').stop();
     		$('#profile-paulo').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
     			$(this).removeClass("animated fadeOut");
     			$('#container-profile-paulo').css('display', 'none');

     			$('#profile-eduardo-description').css("display", "block");
     			$('#profile-eduardo-description').addClass('animated fadeIn').stop();
     			$('#profile-eduardo-description').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
     				$(this).removeClass("animated fadeIn");

     			});

     		});

	}
}


function open_paulo_profile(){
	if($('#profile-paulo').hasClass('profile-paulo-open')){
     	$('#profile-paulo-description').addClass('animated fadeOut').stop();
     	$('#profile-paulo-description').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
     		$(this).removeClass("animated fadeOut");
     		$('#profile-paulo-description').css("display", "none");

     		$('#profile-paulo').removeClass("profile-paulo-open");
			$('#profile-paulo').addClass("profile-paulo-closed");

     		$('#container-profile-eduardo').css('display', 'block');

     		$('#profile-eduardo').addClass('animated fadeIn').stop();
     		$('#profile-eduardo').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
     			$(this).removeClass("animated fadeIn");
     		});

     	});

	}else{
		$('#profile-paulo').removeClass("profile-paulo-closed");
		$('#profile-paulo').addClass("profile-paulo-open");

     		$('#profile-eduardo').addClass('animated fadeOut').stop();
     		$('#profile-eduardo').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
     			$(this).removeClass("animated fadeOut");
     			$('#container-profile-eduardo').css('display', 'none');

     			$('#profile-paulo-description').css("display", "block");
     			$('#profile-paulo-description').addClass('animated fadeIn').stop();
     			$('#profile-paulo-description').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
     				$(this).removeClass("animated fadeIn");

     			});

     		});

	}
}

/*

$(window).bind("scroll", function() {

    //clear all active class
    if($('#myCarousel').is(':within-viewport') && ){
    	$('#current-session-label').css('display', 'block');
        $('#current-session-label span').text('PERFIL');

        $('#current-session-label').addClass('animated flipInX').stop();
     		$('#current-session-label').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
     			$(this).removeClass("animated flipInX");

     		});

    }else if($('#myElement').is(':within-viewport-left')){

    }else if($('#myElement').is(':within-viewport-left')){

    }else if($('#myElement').is(':within-viewport-left')){

    }
});


*/
var flag = false;

$(document).ready(function(){


	var waypoint = new Waypoint({
	  element: document.getElementById('logovo-wrapper'),
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
  }
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


	$('#profile-eduardo').on('click', function(){

		


	});

	

});

function open_eduardo_profile(){


	if($('#profile-eduardo').hasClass('profile-eduardo-open')){
     	$('#profile-eduardo-description').addClass('animated flipOutX').stop();
     	$('#profile-eduardo-description').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
     		$(this).removeClass("animated flipOutX");
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
     			$('#profile-eduardo-description').addClass('animated flipInX').stop();
     			$('#profile-eduardo-description').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
     				$(this).removeClass("animated flipInX");

     			});

     		});

	}


	


	


	

}



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
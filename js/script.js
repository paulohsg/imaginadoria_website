var flag = false;

$(document).ready(function(){

/*BOTAO TOPO MOBILE*/
  var waypoint = new Waypoint({
    element: document.getElementById('logovo-text'),
      
    handler: function(direction) {
      if(direction == 'up'){

        $('#top-button-mobile').addClass('animated flipOutX').stop();
            $('#top-button-mobile').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
              $(this).removeClass("animated flipOutX");
              $('#top-button-mobile').css("visibility", "hidden");

            });

    }else{

        $('#top-button-mobile').css("visibility", "visible");

        $('#top-button-mobile').addClass('animated flipInX').stop();
        $('#top-button-mobile').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
          $(this).removeClass("animated flipInX");

        });
    }
  }

});


	var waypoint = new Waypoint({
	  element: document.getElementById('logovo-text'),
      
	  handler: function(direction) {
	    if(direction == 'up'){
	    	$('#logovo-navbar').addClass('animated flipOutX');
	    		$('#logovo-navbar').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){

		    		$(this).removeClass('animated flipOutX');
			     	$('#logovo-list').css("display", "none");
			     	$("#normal-list").css("display", "block");

            Waypoint.refreshAll();

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

              Waypoint.refreshAll()

		     		});

    }else{
    	$('.toLeft').addClass('animated fadeOut');
        $('.toLeft').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){

     		$(this).removeClass("animated fadeOut");
     		$('#normal-list').css("display", "none");
     		$('#logovo-list').css('display', 'block');

        Waypoint.refreshAll()

     		$('#logovo-navbar').addClass('animated flipInX').stop();
     		$('#logovo-navbar').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
     			$(this).removeClass("animated flipInX");

     		});

     		$('#top-button').css("display", "block");

        Waypoint.refreshAll()

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
  offset: 200

});


    var waypoint = new Waypoint({
      element: document.getElementById('carousel-container'),

      handler: function(direction) {
        if(direction == 'up'){
      		$('#current-session-label').addClass('animated flipOutX').stop();
	     	$('#current-session-label').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
	     		$(this).removeClass("animated flipOutX");

	     		$('#current-session-label').css('display', 'none');

          Waypoint.refreshAll()

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
      offset: '30%'

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
      offset: '30%'
       //context: jQuery('#services')

  });




    var waypoint = new Waypoint({
      element: document.getElementById('portfolio'),

      handler: function(direction) {

      	if(direction == 'up'){
      		$('#current-session-label').addClass('animated flipOutX').stop();
	     	$('#current-session-label').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
	     		$(this).removeClass("animated flipOutX");

	     		$('#current-session-label span').text('SERVIÇOS');

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
      offset: '30%'

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
      },

      offset: '30%'

  });



    $(document).delegate('body', 'click', function(event) {
      if($('#img-logovo-navbar').attr('src') == "img/icon_menu.png"){
            $('#img-logovo-navbar').fadeOut(300, function() {
              $(this).attr("src","img/logovo.png");
              $(this).width("79.35");
              $(this).fadeIn(300);
          });
          }
        });


	$('#img-logovo-navbar').on('click', function() {


		if($(this).attr('src') == "img/logovo.png"){
			$(this).fadeOut(300, function() {
		        $(this).attr("src","img/icon_menu.png");
            $(this).width("83.59");
		        $(this).fadeIn(300);
		    });
		}else{
			$(this).fadeOut(300, function() {
		        $(this).attr("src","img/logovo.png");
            $(this).width("79.35");
		        $(this).fadeIn(300);
		    });
		}

	});


  /*CAROUSEL MOBILE*/
  $('#carousel-mobile').slick({
    infinite: false,
    arrows: false,
    dots:true,
  });

/*
	$('.dropdown').on('show.bs.dropdown', function(e){
	  $(this).find('.dropdown-menu').first().stop(true, true).slideDown(500);
	});

	// Add slideUp animation to dropdown
	$('.dropdown').on('hide.bs.dropdown', function(e){
	  $(this).find('.dropdown-menu').first().stop(true, true).slideUp(500);
	});
*/

});


jQuery(document).ready(function ($) {


$('.dropdown').on('show.bs.dropdown', function(e){
  $(this).find('.dropdown-menu').first().stop(true, true).slideDown(300);
});

// Add slideUp animation to dropdown
$('.dropdown').on('hide.bs.dropdown', function(e){
  $(this).find('.dropdown-menu').first().stop(true, true).slideUp(300);
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


	});

  /*MODALS*/


  $('#modal-paulo-link').animatedModal({
    modalTarget:'animated-modal-paulo',
    color: 'rgb(139, 204, 192)'
  });

  $('#modal-eduardo-link').animatedModal({
    modalTarget:'animated-modal-eduardo',
    color: 'rgb(139, 204, 192)'
  });


  

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


function open_eduardo_profile_mobile(){
  if($('#profile-eduardo-mobile').hasClass('profile-eduardo-open-mobile')){
      $('#profile-eduardo-description-mobile').addClass('animated fadeOut').stop();
      $('#profile-eduardo-description-mobile').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
        $(this).removeClass("animated fadeOut");
        $('#profile-eduardo-description-mobile').css("display", "none");

        $('#profile-eduardo-mobile').removeClass("profile-eduardo-open");
      $('#profile-eduardo-mobile').addClass("profile-eduardo-closed");

        $('#container-profile-paulo-mobile').css('display', 'block');

        $('#profile-paulo-mobile').addClass('animated fadeIn').stop();
        $('#profile-paulo-mobile').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
          $(this).removeClass("animated fadeIn");
        });

      });

  }else{
    $('#profile-eduardo-mobile').removeClass("profile-eduardo-closed-mobile");
    $('#profile-eduardo-mobile').addClass("profile-eduardo-open-mobile");

        $('#profile-paulo-mobile').addClass('animated fadeOut').stop();
        $('#profile-paulo-mobile').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
          $(this).removeClass("animated fadeOut");
          $('#container-profile-paulo-mobile').css('display', 'none');

          $('#profile-eduardo-description-mobile').css("display", "block");
          $('#profile-eduardo-description-mobile').addClass('animated fadeIn').stop();
          $('#profile-eduardo-description-mobile').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
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



function open_paulo_profile_mobile(){
  if($('#profile-paulo-mobile').hasClass('profile-paulo-open-mobile')){
      $('#profile-paulo-description-mobile').addClass('animated fadeOut').stop();
      $('#profile-paulo-description-mobile').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
        $(this).removeClass("animated fadeOut");
        $('#profile-paulo-description-mobile').css("display", "none");

        $('#profile-paulo-mobile').removeClass("profile-paulo-open-mobile");
      $('#profile-paulo-mobile').addClass("profile-paulo-closed-mobile");

        $('#container-profile-eduardo-mobile').css('display', 'block');

        $('#profile-eduardo-mobile').addClass('animated fadeIn').stop();
        $('#profile-eduardo-mobile').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
          $(this).removeClass("animated fadeIn");
        });

      });

  }else{
    $('#profile-paulo-mobile').removeClass("profile-paulo-closed-mobile");
    $('#profile-paulo-mobile').addClass("profile-paulo-open-mobile");

        $('#profile-eduardo-mobile').addClass('animated fadeOut').stop();
        $('#profile-eduardo-mobile').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
          $(this).removeClass("animated fadeOut");
          $('#container-profile-eduardo-mobile').css('display', 'none');

          $('#profile-paulo-description-mobile').css("display", "block");
          $('#profile-paulo-description-mobile').addClass('animated fadeIn').stop();
          $('#profile-paulo-description-mobile').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
            $(this).removeClass("animated fadeIn");

          });

        });

  }
}



$(document).ready(function(){
/*
    $("#contact-form").ajaxForm({url: 'send-email.php',
                            type: 'post',
                            success: function(json)
                                   {
                                        var data = JSON.parse(json);
                                       if( data.status == 'error' ) {
                                            alert('Erro ao enviar mensagem. Por favor tente novamente mais tarde, ou nos contate diretamente pelo email info@imaginadoria.com.');
                                            location.reload();
                                        }else{
                                            alert('Mensagem enviada com sucesso! Em breve retornaremos seu contato.');
                                            location.reload();
                                        }

                                   }
    });

*/

    $('#contact-form').on('submit', function(e) {

      // Prevent default browser form submission with page reload
      e.preventDefault();

      $('#email-form').addClass('animated fadeOut').stop();
      $('#email-form').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
            $(this).removeClass("animated fadeOut");
            $(this).css('display', 'none');
            $('#send-email-animation').css('display', 'block');

            $('#image-animation-1').css('display', 'block');
            $('#image-animation-1').addClass('animated fadeIn').stop();
            $('#image-animation-1').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
              $(this).removeClass("animated fadeIn");

              $('#image-animation-2').css('display', 'block');
              $('#image-animation-2').addClass('animated fadeIn').stop();
              $('#image-animation-2').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
                $(this).removeClass("animated fadeIn");

                $('#image-animation-3').css('display', 'block');
                $('#image-animation-3').addClass('animated fadeIn').stop();
                $('#image-animation-3').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
                  $(this).removeClass("animated fadeIn");

                  $('#image-animation-4').css('display', 'block');
                  $('#image-animation-4').addClass('animated fadeIn').stop();
                  $('#image-animation-4').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
                    $(this).removeClass("animated fadeIn");

                    $('#image-animation-5').css('display', 'block');
                    $('#image-animation-5').addClass('animated fadeIn').stop();
                    $('#image-animation-5').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
                      $(this).removeClass("animated fadeIn");

                      $('#image-animation-6').css('display', 'block');
                      $('#image-animation-6').addClass('animated fadeIn').stop();
                      $('#image-animation-6').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
                        $(this).removeClass("animated fadeIn");

                        $('#image-animation-7').css('display', 'block');
                        $('#image-animation-7').addClass('animated fadeIn').stop();
                        $('#image-animation-7').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
                          $(this).removeClass("animated fadeIn");

                          $('#image-animation-8').css('display', 'block');
                          $('#image-animation-8').addClass('animated fadeIn').stop();
                          $('#image-animation-8').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
                            $(this).removeClass("animated fadeIn");

                          });

                        });

                      });

                    });

                  });

                });

              });

            });

            $('#send-email-waiting').addClass('animated fadeIn').stop();
            $('#send-email-waiting').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
              $(this).removeClass("animated fadeIn");

            });

      });


      // Make POST request with form parameters
      $.post(this.action, $(this).serialize()).done(function(response) {

          var data = JSON.parse(response);


          $('#send-email-animation').addClass('animated fadeOut').stop();
          $('#send-email-animation').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
             $(this).removeClass("animated fadeOut");
             $(this).css('display', 'none');

             if(data.status == 'success'){

              $('#send-email-success').css('display', 'block')
              $('#send-email-success').addClass('animated fadeIn').stop();
              $('#send-email-success').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
                 $(this).removeClass("animated fadeIn");
               });

             }else{
              $('#send-email-error').css('display', 'block')
              $('#send-email-error').addClass('animated fadeIn').stop();
              $('#send-email-error').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
                 $(this).removeClass("animated fadeIn");
               });

             }

          });
      });
  })



  $('#modal-portfolio-1').animatedModal({
    modalTarget:'animatedModal1',
    color: '#fff'
  });

  $('#modal-portfolio-2').animatedModal({
    modalTarget:'animatedModal2',
    color: '#fff'
  });

  $('#modal-portfolio-3').animatedModal({
    modalTarget:'animatedModal3',
    color: '#fff'
  });

  $('#modal-portfolio-4').animatedModal({
    modalTarget:'animatedModal4',
    color: '#fff'
  });

  $('#modal-portfolio-5').animatedModal({
    modalTarget:'animatedModal5',
    color: '#fff'
  });

  $('#modal-portfolio-6').animatedModal({
    modalTarget:'animatedModal6',
    color: '#fff'
  });

});
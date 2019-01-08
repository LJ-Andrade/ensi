// ------- PRE-LOADER ------- //

$(document).ready(function($) {
    $('.preloader').fadeOut();
});

$(document).ready(function(){
     new WOW().init();

     $('#top-nav').onePageNav({
        currentClass: 'current',
        changeHash: true,
        scrollSpeed: 1200
    });

    //animated header class
    $(window).scroll(function() {
    var scroll = $(window).scrollTop();
     //console.log(scroll);
    if (scroll > 200) {
        //console.log('a');
        $(".navigation").addClass("animated");
    } else {
        //console.log('a');
        $(".navigation").removeClass("animated");
    }});

    $(".post-home-slider").owlCarousel(
        {
        singleItem: true,
        loop: true,
        pagination: false,
        autoplay:true,
        autoplayTimeout:4000,
        autoplayHoverPause:false,
        items: 1,
        }
    );


    $('.clients-slider').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        responsive:{
            0:{
                items:2
            },
            600:{
                items:3
            },
            1000:{
                items:4
            }
        }
    });

    //contact form validation
    $("#contact-form").validate({
        rules: {
            name: {
                required: true,
                minlength: 2
            },
            message: {
                required: true,
                minlength: 15
            },
            email: {
                required: true,
                email: true
            }
        },
        messages: {
            name: {
                required: "Ingrese su nombre",
                minlength: "Su nombre debe contener al menos 2 caracteres"
            },
            message: {
                required: "Ingrese un mensaje",
                minlength: "Su mensaje debe contener al menos 15 caracteres"
            },
            email: {
                required: "Ingrese un email",
                email: "Ingrese un email válido"
            },
            phone: {

            }
        },
        submitHandler: function(form) {
            $(form).ajaxSubmit({
                type:"POST",
                data: $(form).serialize(),
                url:"mail.php",
                success: function() {
                    $('#contact-form :input').attr('disabled', 'disabled');
                    $('#contact-form').fadeTo( "slow", 0, function() {
                        $(this).find(':input').attr('disabled', 'disabled');
                        $(this).find('label').css('cursor','default');
                        $( '#contact-col' ).hide();
                        $('#success').fadeIn();

                    });
                },
                error: function() {
                    $( '#contact-col' ).hide();
                    $('#error').fadeIn();
                }
            });
        }
    });

});

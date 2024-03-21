var windowloadwidth = '';
/*-- Set Place Holder for IE Browser --*/
$('input[type=text], textarea').placeholder();

$(document).ready(function() {
	'use strict';
	/*-- Set Loading --*/
	$('.loading').show();
	$('.loading-bg').show();
	
    /* ------------------------------------------------------------------------ */
    /*	COUNTDOWN
	/* ------------------------------------------------------------------------ */
    $('#counter').countdown('2024/01/01 12:00:00').on('update.countdown', function(event) {
        var $this = $(this).html(event.strftime('' + '<div class="counter-container"><div class="counter-box first"><div class="number">%-D</div><span>Day%!d<span></div>' + '<div class="counter-box"><div class="number">%H</div><span>Hours</span></div>' + '<div class="counter-box"><div class="number">%M</div><span>Minutes</span></div>' + '<div class="counter-box last"><div class="number">%S</div><span>Seconds</span></div></div>'));
    });
	 /* ------------------------------------------------------------------------ */
    /*	END COUNTDOWN
	/* ------------------------------------------------------------------------ */
	$( document ).ready(function() {
		
		/*Border Menu Event*/
		$( "#bt-menu ul li" ).click(function() {
		
		$('#bt-menu').addClass('bt-menu-close').removeClass('bt-menu-open');
		});
	});
	/* ------------------------------------------------------------------------ */
    /*	Validate Get Notified Data
	/* ------------------------------------------------------------------------ */
    function ValidateGetNotified() {
        var err = "";
        var email = $("#email").val();
        if (!(/(.+)@(.+){2,}\.(.+){2,}/.test(email))) {
            var err = "error";
        } else {}
        return err;
    }
	/* ------------------------------------------------------------------------ */
    /*	Get Notified submit button event
	/* ------------------------------------------------------------------------ */
    $("#submitbutton").click(function(e) {
        if (ValidateGetNotified() == "") {
            $("#email").removeClass("validation");
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: "notifyme.php",
                data: $("#notifyMe").serialize(),
                success: function(result) {
                    $("#successmsg").show();
                    $("#successmsg").html(result);

                }
            });

            $("#email").val('');

        } else {
            $("#email").addClass("validation");
            return false;
        }
    });
	/* ------------------------------------------------------------------------ */
    /*	Validate Contact Us Data
	/* ------------------------------------------------------------------------ */
    function ValidateContactUs() {

        var title = $("#name").val();

        var err = "";
        if (title == "Name" || title == "" || title == null) {
            $("#name").addClass("validation");

            var err = "error";
        } else {
            $("#name").removeClass("validation");
        }
        var email = $("#email1").val();
        if (!(/(.+)@(.+){2,}\.(.+){2,}/.test(email))) {
            $("#email1").addClass("validation");

            var err = "error";
        } else {
            $("#email1").removeClass("validation");
        }
        var title = $("#message").val();
        if (title == "Message" || title == "" || title == null) {
            $("#message").addClass("validation");
            var err = "error";
        } else {
            $("#message").removeClass("validation");
        }
        return err;
    }
	/* ------------------------------------------------------------------------ */
    /*	Contact us submit button event
	/* ------------------------------------------------------------------------ */
    $("#submit_btn").click(function(e) {
        if (ValidateContactUs() == "") {
            var resulttext = $.ajax({
                type: "POST",
                url: "contact.php",
                data: $("#form1").serialize(),
                async: false,
                success: function(status) {}
            }).responseText;

            $("#successmsg1").html(resulttext);
            $("#form1").delay(100).slideUp(1000, function() {

                $('#successmsg1').delay(500).slideDown(500);
            });
            $("#name").val('');
            $("#email1").val('');
            $("#message").val('');
        }
        e.preventDefault();
        return false;
    });
	/*-- Call Full Page JS Event --*/
    fullpage();
    windowloadwidth = $(window).width();
	

});

$(window).resize(function() {
	/*-- Reload page when user resize window --*/
    if (windowloadwidth != $(window).width()) {
        location.href = location.href.split("#")[0];
    }
});

function fullpage() {
    /** Full Page Effect JS **/
    if ($(window).width() > 1024) {
        $('#fullpage').fullpage({
            sectionsColor: ['#000', '#000', '#000'],
            anchors: ['welcome', 'about-us', 'contact-us'],
            menu: '#menu',
            afterLoad: function(anchorLink, index) {
                if (index == 2) {
                    //moving the image
                    $('#section1').find('img').delay(500).animate({
                        left: '0%'
                    }, 1500, 'easeOutExpo');

                    $('#section1').find('p').first().fadeIn(1800, function() {
                        $('#section1').find('p').last().fadeIn(1800);
                    });;

                }
                if (anchorLink == 'contact-us') {
                    //moving the image
                    $('#section2').find('.intro').delay(500).animate({
                        left: '0%'
                    }, 1500, 'easeOutExpo');
                }
            }
        });
    } else {
        $('#fullpage').fullpage({
            anchors: ['welcome', 'about-us', 'contact-us'],
            navigation: false,
            scrollingSpeed: 1700,
            loopBottom: false,
            easing: 'easeOutBack',
            resize: false,
            autoScrolling: false
        });
    }
}
/* iOS ipad/iphone keyboard */
$(document).on('blur', 'input, textarea', function() {
    setTimeout(function() {
        window.scrollTo(document.body.scrollLeft, document.body.scrollTop);
    }, 0);
});
/*-- Hide Loading --*/
jQuery(window).load(function () {
	$('.loading').hide();
	$('.loading-bg').hide();
});

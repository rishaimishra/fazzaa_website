/* menu toggle */
$(function() {
    $(".toggle-menu").click(function() {
        $(this).toggleClass("active");
        $('.menu-drawer').toggleClass("open");
    });
});

 
// Smooth scrolling using jQuery easing
    $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function () {
        if (
            location.pathname.replace(/^\//, "") ==
            this.pathname.replace(/^\//, "") &&
            location.hostname == this.hostname
        ) {
            var target = $(this.hash);
            target = target.length
                ? target
                : $("[name=" + this.hash.slice(1) + "]");
            if (target.length) {
                $("html, body").animate(
                    {
                        scrollTop: target.offset().top - 72,
                    },
                    50,"swing"

                );
                return false;
            }
        }
    });
    if (screen.width <= 769) {
        // Closes responsive menu when a scroll trigger link is clicked
        $("a.js-scroll-trigger").click(function () {
            $(".navbar-collapse").toggleClass("open");
            $(".toggle-menu").toggleClass("active");
        });
    }



    // Collapse Navbar
    var navbarCollapse = function () {
        if ($("#mainNav").offset().top > 500) {
            $("#mainNav").addClass("navbar-shrink");
        } else {
            $("#mainNav").removeClass("navbar-shrink");
        }
    };
    // Collapse now if page is not at top
    navbarCollapse();
    // Collapse the navbar when page is scrolled
    $(window).scroll(navbarCollapse);


// Added for social icons color change
	
	 $( window ).scroll(function() {
    if ($( this ).scrollTop() > 400 && $( this ).scrollTop() < 1200 ) {
        $('.social_icons a').css("color", "#a7d4e9").css("transition","0.3s ease-in-out");
    }
    else if ($( this ).scrollTop() > 1200 && $( this ).scrollTop() < 1900) {
        $('.social_icons a').css("color", "#e1d3e2").css("transition","0.3s ease-in-out");
        console.log ("hi");
    }
    else if ($( this ).scrollTop() > 1900 && $( this ).scrollTop() < 2900) {
        $('.social_icons a').css("color", "#b1d9cf").css("transition","0.3s ease-in-out");
    }
    else if ($( this ).scrollTop() > 2900 && $( this ).scrollTop() < 3600) {
        $('.social_icons a').css("color", "#f1ae6c").css("transition","0.3s ease-in-out");
    }
    else if ($( this ).scrollTop() > 3600 && $( this ).scrollTop() < 4000) {
        $('.social_icons a').css("color", "#b99bbe").css("transition","0.3s ease-in-out");
    }
    else if ($( this ).scrollTop() > 4000  ) {
        $('.social_icons a').css("color", "#edc55d").css("transition","0.3s ease-in-out");
    }
    else {
        $('.social_icons a').css("color", "#ffffff").css("transition","0.3s ease-in-out"); 
    	
    }
});
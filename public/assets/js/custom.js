jQuery(function ($) {
    /* ----------------------------------------------------------- */
    /*  1. SEARCH FORM
  /* ----------------------------------------------------------- */

    let imagesArray = []; // Array to hold image sources
    let currentIndex = 0;  // To keep track of the current image

    jQuery(document).on("click", ".mu-search-icon", function (event) {
        event.preventDefault();
        $("#mu-search").addClass("mu-search-open");

        // Get the image source of the clicked gallery item
        let imgSrc = $(this).closest(".mu-single-gallery-item").find("img").attr("src");

        // Add the image source to the array and set it as the current image
        imagesArray = []; // Reset the array
        $(".mu-single-gallery-item img").each(function () {
            imagesArray.push($(this).attr("src"));
        });
        currentIndex = imagesArray.indexOf(imgSrc); // Set the initial index

        // Set the image inside the search box
        $("#mu-search .mu-image img").attr("src", imgSrc);
    });

    // Next button click
    jQuery(document).on("click", ".mu-next", function (event) {
        if (currentIndex < imagesArray.length - 1) {
            currentIndex++;
            $("#mu-search .mu-image img").attr("src", imagesArray[currentIndex]);
        }
    });

    // Previous button click
    jQuery(document).on("click", ".mu-prev", function (event) {
        if (currentIndex > 0) {
            currentIndex--;
            $("#mu-search .mu-image img").attr("src", imagesArray[currentIndex]);
        }
    });

    jQuery(document).on("click", ".mu-search-close", function (event) {
        $("#mu-search").removeClass("mu-search-open");
    });

    /* ----------------------------------------------------------- */
    /*  2. ABOUT US VIDEO
/* ----------------------------------------------------------- */
    // WHEN CLICK PLAY BUTTON
    jQuery("#mu-abtus-video").on("click", function (event) {
        event.preventDefault();
        $("body").append(
            "<div id='about-video-popup'><span id='mu-video-close' class='fa fa-close'></span><iframe id='mutube-video' name='mutube-video' frameborder='0' allowfullscreen></iframe></div>"
        );
        $("#mutube-video").attr("src", $(this).attr("href"));
    });
    // WHEN CLICK CLOSE BUTTON
    $(document).on("click", "#mu-video-close", function (event) {
        $(this).parent("div").fadeOut(1000);
    });
    // WHEN CLICK OVERLAY BACKGROUND
    $(document).on("click", "#about-video-popup", function (event) {
        $(this).remove();
    });

    /* ----------------------------------------------------------- */
    /*  3. TOP SLIDER (SLICK SLIDER)
  /* ----------------------------------------------------------- */

    jQuery("#mu-slider").slick({
        dots: false,
        infinite: true,
        arrows: true,
        speed: 500,
        autoplay: true,
        cssEase: "linear",
    });

    /* ----------------------------------------------------------- */
    /*  4. ABOUT US (SLICK SLIDER)
  /* ----------------------------------------------------------- */

    jQuery("#mu-testimonial-slide").slick({
        dots: true,
        infinite: true,
        arrows: false,
        speed: 500,
        autoplay: true,
        cssEase: "linear",
        slidesToShow: 2,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true,
                },
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1.5,
                    slidesToScroll: 1,
                },
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                },
            },
        ],
    });

    jQuery("#mu-eventdetail-slide").slick({
        dots: true,
        infinite: true,
        arrows: false,
        speed: 500,
        autoplay: true,
        cssEase: "linear",
        slidesToShow: 2,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true,
                },
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                },
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                },
            },
        ],
    });

    /* ----------------------------------------------------------- */
    /*  5. LATEST COURSE SLIDER (SLICK SLIDER)
  /* ----------------------------------------------------------- */

    jQuery("#mu-latest-course-slide").slick({
        dots: true,
        arrows: false,
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 2,
        autoplay: true,
        autoplaySpeed: 2500,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true,
                },
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                },
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                },
            },
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ],
    });


    jQuery("#teacher-slide").slick({
        dots: false,
        autoplay: true,
        arrows: false,
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplaySpeed: 2000,

        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 5,
                    slidesToScroll: 2,
                },
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 2,
                },
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                },
            },
        ],
    });
    jQuery("#gallery-slide-front").slick({
        dots: false,
        autoplay: true,
        arrows: false,
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplaySpeed: 1000,

        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 6,
                    slidesToScroll: 2,
                },
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 2,
                },
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                },
            },
        ],
    });



    /* ----------------------------------------------------------- */
    /*  7. COUNTER
  /* ----------------------------------------------------------- */

    jQuery(".counter").counterUp({
        delay: 10,
        time: 1000,
    });

    /* ----------------------------------------------------------- */
    /*  8. RELATED ITEM SLIDER (SLICK SLIDER)
  /* ----------------------------------------------------------- */

    jQuery("#mu-related-item-slide").slick({
        dots: false,
        arrows: true,
        infinite: true,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 2,
        autoplay: true,
        autoplaySpeed: 2500,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 2,
                    infinite: true,
                    dots: false,
                },
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 2,
                },
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                },
            },
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ],
    });

    jQuery("#mu-achievement-item-slide").slick({
        dots: false,
        arrows: false,
        infinite: true,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 2,
        autoplay: true,
        autoplaySpeed: 2500,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 2,
                    infinite: true,
                    dots: false,
                },
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 2,
                },
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                },
            },
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ],
    });
    /* ----------------------------------------------------------- */
    /*  11. HOVER DROPDOWN MENU
  /* ----------------------------------------------------------- */

    // for hover dropdown menu
    jQuery("ul.nav li.dropdown").hover(
        function () {
            jQuery(this)
                .find(".dropdown-menu")
                .stop(true, true)
                .delay(200)
                .fadeIn(200);
        },
        function () {
            jQuery(this)
                .find(".dropdown-menu")
                .stop(true, true)
                .delay(200)
                .fadeOut(200);
        }
    );

    /* ----------------------------------------------------------- */
    /*  12. SCROLL TOP BUTTON
  /* ----------------------------------------------------------- */

    //Check to see if the window is top if not then display button

    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > 300) {
            jQuery(".scrollToTop").fadeIn();
        } else {
            jQuery(".scrollToTop").fadeOut();
        }
    });

    //Click event to scroll to top

    jQuery(".scrollToTop").click(function () {
        jQuery("html, body").animate({ scrollTop: 0 }, 800);
        return false;
    });
});

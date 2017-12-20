<script>
    $(".ui.dropdown").dropdown();

    $(document).ready(function () {
        $("#news-carousel").owlCarousel({
            rtl: true,
            loop: true,
            margin: 10,
            responsiveClass: true,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: true,
            nav: false,

            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5,
                    loop: false
                }
            }
        });
    });


    $("#activates-carousel").owlCarousel({
        rtl: true,
        loop: true,
        margin: 10,
        responsiveClass: true,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        nav: false,

        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 3,
                loop: false
            }
        }
    });

    $("#product-carousel").owlCarousel({
        rtl: true,
        loop: true,
        margin: 10,
        responsiveClass: true,
        autoplay: false,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        nav: false,

        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 3,
                loop: false
            }
        }
    });

    $("#app-carousel").owlCarousel({
        rtl: true,
        loop: true,
        margin: 10,
        responsiveClass: true,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        nav: false,

        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 3,
                loop: false
            }
        }
    });


    $("#activates-moon-carousel").owlCarousel({
        rtl: true,
        loop: true,
        margin: 10,
        responsiveClass: true,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        nav: false,

        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 3,
                loop: false
            }
        }
    });

</script>
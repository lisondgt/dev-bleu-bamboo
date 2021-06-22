(function ($) {

    function responsiveNav() {
        $(".toggle-navbar").click(function () {
            $(this).toggleClass("toggle");
            $('.navbar').toggleClass("open");
            $('body').toggleClass('overflow-hidden');
        });
        $("header nav a").click(function () {
            $(".toggle-navbar").removeClass("toggle");
            $('.navbar').removeClass("open");
            $('body').removeClass('overflow-hidden');
        });
        if ($(window).width() >= 880) {
            $('.toggle-navbar').removeClass("toggle");
            $('.navbar').removeClass("open");
            $('body').removeClass('overflow-hidden');
        }
    }

    $(document).ready(function () {
        responsiveNav();

    });

    $(window).resize(function () {
        responsiveNav();
    });

    $(window).scroll(function() {
    });

})(jQuery);
function menuMobile() {
    if($( window ).width() < 768) {

        if (
            $(".header__bars").length ||
            $(".menu-mobile").length ||
            $(".overlay").length
        ) {
            $(".header__bars").click(function () {
                $(".overlay").addClass("overlay-active");
                $(".menu-mobile").addClass("menu-mobile-active");
            });
            $(".overlay").click(function () {
                $(".overlay").removeClass("overlay-active");
                $(".menu-mobile").removeClass("menu-mobile-active");
                $(".box-search_header").removeClass("active");
            });
            $(".menu-mobile-close").click(function () {
                $(".overlay").removeClass("overlay-active");
                $(".menu-mobile").removeClass("menu-mobile-active");
            });
        }

        $(".menu-mobile ul li.menu-item-has-children>ul").before(`<span class="li-plus"></span>`);
        $(".menu-mobile ul li.current-menu-parent.menu-item-has-children .li-plus").addClass("clicked");


        if ($(".li-plus").length) {
            $(".li-plus").click(function (e) {
                if ($(this).hasClass("clicked")) {
                    $(this).removeClass("clicked").next("ul").slideUp(500);
                } else if ($(this).parents().siblings("a").hasClass("clicked")) {
                    $(".clicked").slideDown();
                    $(this).addClass("clicked").next("ul").slideDown(500);
                } else {
                    $("#nav li a").removeClass("clicked").next("ul").slideUp(500);
                    $(this).addClass("clicked").next("ul").slideDown(500);
                }
            });
        }
    }
}

menuMobile();

$(document).ready(function(){
    $(".header__search ").click(function(){
        $(".gnws-header-description-search").slideToggle("d-block");
        $(this).addClass("d-none");
        $(".header__close").addClass("d-inline-block");

    });
    $(".header__close ").click(function(){
        $(".gnws-header-description-search").slideToggle("d-block");
        $(".header__search").removeClass("d-none");
        $(this).removeClass("d-inline-block");

    });

});

$(document).ready(function() {
    $navbar = $('nav.nav');

    $(window).scroll(function() {
        if($(this).scrollTop()>300) {
            $navbar.css("background-color", "#fff");
            $navbar.find('.is-home').css("color", "#7a7a7a");
        } else {
            $navbar.css("background-color", "transparent");
            $navbar.find('.is-home').css("color", "#ddd");
        }
        $navbar.find('.is-home.is-active').css("color", "#78A848");
    });
});
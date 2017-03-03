$(document).ready(function() {
    $('body').css("opacity", "1");
    setTimeout(function() {
        $('.jumbotron .container').css("opacity", "1");
    }, 700);
    setTimeout(function() {
        $('nav.nav').css("top", "0");
    }, 1200);
});
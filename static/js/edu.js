$(document).ready(function() {
    $('.next').click(function() {
        num = $(this).closest('.page').attr('id').slice(4, 5);
        num = Number(num);
        num = num + 1;
        page = '#page' + String(num);
        $(this).closest('.page').fadeOut(200);
        $(page).delay(200).fadeIn(200);
    });

    $('.previous').click(function() {
        num = $(this).closest('.page').attr('id').slice(4, 5);
        num = Number(num);
        num = num - 1;
        page = '#page' + String(num);
        $(this).closest('.page').fadeOut(200);
        $(page).delay(200).fadeIn(200);
    });
})
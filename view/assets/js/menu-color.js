$(document).ready(function () {
    $("#btn-top").hide()
});
$(window).scroll(function () {
    if ($(document).scrollTop() > 50) {
        $('nav').removeClass('transparent'),
        $("#btn-top").show();
    } else {
        $('nav').addClass('transparent'),
        $("#btn-top").hide();
    }
});
// Debounce do Lodash
debounce = function (func, wait, immediate) {
    var timeout;
    return function () {
        var context = this, args = arguments;
        var later = function () {
            timeout = null;
            if (!immediate) func.apply(context, args);
        };
        var callNow = immediate && !timeout;
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
        if (callNow) func.apply(context, args);
    };
};

var offset = $(window).height() * 3.5 / 4;

(function () {

    function animeScroll() {
        var documentTop = $(document).scrollTop();

        $('.fade-ani').each(function () {
            var itemTop = $(this).offset().top;
            if (documentTop > itemTop - offset) {
                $(this).addClass('showing');
            }
            else {
                $(this).removeClass('showing');
            }
        });
    }

    animeScroll();

    $(document).scroll(debounce(function () {
        animeScroll();
    }, 200));

})();

/*
$(function () {
    $(window).scroll(function () {

        var bottom_of_window = $(window).scrollTop() + $(window).height();
        //fade-in
        $('.fade-ani').each(function () {
            var bottom_of_object = $(this).position().top + $(this).outerHeight();
            if (bottom_of_window > bottom_of_object) {
                $(this).addClass('showing');
            }
            else {
                $(this).removeClass('showing');
            }
        });

    });
}());
*/
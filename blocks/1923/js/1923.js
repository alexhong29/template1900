$(document).ready(function () {
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 3,
        loopedSlides: 2,
        spaceBetween: 0,
        parallax: true,
        autoplay: 5000,
        speed: 800,
        autoplayDisableOnInteraction: false,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });

    $('.click').click(function () {
        var url = $(this).attr('src');
        $('.image img').attr("src", url);
    });
    var $star_rating = $('.star-rating .fa');

    var SetRatingStar = function () {
        return $star_rating.each(function () {
            if (parseInt($star_rating.siblings('input.rating-value').val()) >= parseInt($(this).data('rating'))) {
                return $(this).removeClass('fa-star-o').addClass('fa-star');
            } else {
                return $(this).removeClass('fa-star').addClass('fa-star-o');
            }
        });
    };

    $star_rating.on('click', function () {
        $star_rating.siblings('input.rating-value').val($(this).data('rating'));
        return SetRatingStar();
    });

    SetRatingStar();
    $('.add').click(function () {
        if ($(this).prev().val() < 10) {
            $(this).prev().val(+$(this).prev().val() + 1);
        }
    });
    $('.sub').click(function () {
        if ($(this).next().val() > 1) {
            if ($(this).next().val() > 1)
                $(this).next().val(+$(this).next().val() - 1);
        }
    });

});






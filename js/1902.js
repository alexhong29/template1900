$(document).ready(function () {
    var swiper1 = new Swiper('.swiper1902', {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
//    $(window).resize(function () {
//        setTimeout(function () {
//            $('.swiper-container').each(function () {
//                $(this).data('swiper').reInit()
//            });
//        },0);
//    });
});

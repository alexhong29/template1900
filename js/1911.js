$(document).ready(function () {
    var swiper = new Swiper('.slide-promotion', {
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
});


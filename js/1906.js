$(document).ready(function () {
    var swiper = new Swiper('.qoutation-slider--higher', {
        loop: true,
        calculateHeight: true,
        mode: 'horizontal',
        
        navigation: {
            nextEl: '.next-arroww',
            prevEl: '.prev-arroww',
        },
    });
});



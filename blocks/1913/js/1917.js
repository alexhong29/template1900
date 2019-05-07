/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function () {
    var swiper = new Swiper('.swiper1917', {
        slidesPerView: 'auto',
        loop: true,
        navigation: {
            nextEl: '.next1917',
            prevEl: '.prev1917',
        }, autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
    });
});

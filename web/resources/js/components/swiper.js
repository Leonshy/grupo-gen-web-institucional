/**
* Swiper Slider
* Enables carousels and sliders
* Requires swiper-bundle.min.js
*/



import Swiper from 'swiper/bundle';


const swiper = new Swiper(".workspaceSwiper", {
    slidesPerView: 1,
    spaceBetween: 50,
    loop: true,

    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },

    breakpoints: {
        640: {
            slidesPerView: 2,
        },
        1024: {
            slidesPerView: 4,
        },
    },
});


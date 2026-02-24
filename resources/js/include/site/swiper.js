// import Swiper bundle with all modules installed
import Swiper from 'swiper/bundle';

// import styles bundle
import 'swiper/css/bundle';
export function swiper() {

    const swiper = new Swiper(".mySwiperHead", {
        loop: true,
        scrollbar: {
            el: ".swiper-scrollbar",
                      //hide: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });

    const swiper2 = new Swiper(".mySwiperCarouselCentered", {
       // loop: true,
        slidesPerView: 3,
        spaceBetween: 20,
        centeredSlides: true,
        navigation: {
            nextEl: ".swiper-b-next",
            prevEl: ".swiper-b-prev",
        },
    });
}

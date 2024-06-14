import Swiper from "swiper";
import { Navigation, Pagination } from "swiper/modules";

const swiper = new Swiper(".swiper", {
  modules: [Navigation, Pagination],

  // Fixed with for slides
  slidesPerView: "1",

  // If we need pagination
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  // Navigation arrows
  navigation: {
    nextEl: ".swiper-button-next-unique",
    prevEl: ".swiper-button-prev-unique",
  },

  autoplay: {
    delay: 5000
  },
  breakpoints: {
  },
});

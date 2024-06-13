import Swiper from "swiper";
import { Navigation, Pagination } from "swiper/modules";

const swiper = new Swiper(".swiper", {
  modules: [Navigation, Pagination],
  // loop: true,

  // // If we need pagination
  pagination: {
    el: ".swiper-pagination",
  },

  // // Navigation arrows
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },

  // // And if we need scrollbar
  // scrollbar: {
  //   el: ".swiper-scrollbar",
  // },
});

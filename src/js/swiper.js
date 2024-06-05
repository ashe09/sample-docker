import Swiper from "swiper/bundle";
import "swiper/css/bundle";

// eslint-disable-next-line
const options = {
  loop: true,
  effect: "fade",
  speed: 1500,
  allowTouchMove: false,
  pagination: {
    el: ".swiper-pagination",
    type: "bullets",
    clickable: true
  },
  autoplay: {
    delay: 4000,
    stopOnLastSlide: false,
    disableOnInteraction: false,
    reverseDirection: false
  },
  on: {
    slideChange: function () {
      if (this.realIndex > 0) {
        this.params.autoplay.delay = 3000;
      }
    }
  }
};

new Swiper(".swiper", options);
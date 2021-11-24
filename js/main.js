const hotelSlider = new Swiper(".hotel-slider", {
  // Optional parameters
  //direction: "vertical",
  loop: true,
  //effect: "flip",
  keyboard: {
    enabled: true,
    onlyInViewport: true,
  },
  // Navigation arrows
  navigation: {
    nextEl: ".hotel-slider__button--next",
    prevEl: ".hotel-slider__button--prev",
  },
});

const reviewsSlider = new Swiper(".reviews-slider", {
  // Optional parameters
  //direction: "vertical",
  loop: true,
  //effect: "flip",
  // keyboard: {
  //   enabled: true,
  //   onlyInViewport: true,
  // },
  // Navigation arrows
  navigation: {
    nextEl: ".reviews-slider__button--next",
    prevEl: ".reviews-slider__button--prev",
  },
});

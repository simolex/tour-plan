const swiper = new Swiper(".swiper", {
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
    nextEl: ".slider-button--next",
    prevEl: ".slider-button--prev",
  },
});

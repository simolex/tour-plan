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

const buttonBurger = document.querySelector(".menu-burger");
const menu = document.querySelector(".navbar-bottom");
const mainBody = document.querySelector(".body");

buttonBurger.addEventListener("click", () => {
  menu.classList.toggle("navbar-bottom--visible");
  mainBody.classList.toggle("body--mobile--visible");
});

const search = () => {
  const visibleSearch = document.querySelector(".navbar__search--mobile--visible > input");
  const hiddenSearch = document.querySelector(".navbar__search--mobile--hidden > input");

  visibleSearch.addEventListener("input", (event) => {
    hiddenSearch.value = event.target.value;
  });

  hiddenSearch.addEventListener("input", (event) => {
    visibleSearch.value = event.target.value;
  });
};

search();

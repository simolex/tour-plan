const hotelSlider = new Swiper(".hotel-slider", {
  loop: true,
  lazy: true,

  keyboard: {
    enabled: true,
    onlyInViewport: true,
  },

  navigation: {
    nextEl: ".hotel-slider__button--next",
    prevEl: ".hotel-slider__button--prev",
  },
});

const reviewsSlider = new Swiper(".reviews-slider", {
  loop: true,

  navigation: {
    nextEl: ".reviews-slider__button--next",
    prevEl: ".reviews-slider__button--prev",
  },
});

const buttonBurger = document.querySelector(".menu-burger");
const menu = document.querySelector(".navbar-bottom");

const toggleFixerBody = () => {
  const mainBody = document.querySelector(".body");
  mainBody.classList.toggle("body--fixed");
};

buttonBurger.addEventListener("click", () => {
  menu.classList.toggle("navbar-bottom--visible");
  toggleFixerBody();
});

const unionSearchInputs = () => {
  const visibleSearch = document.querySelector(".navbar__search--mobile--visible > input");
  const hiddenSearch = document.querySelector(".navbar__search--mobile--hidden > input");

  visibleSearch.addEventListener("input", (event) => {
    hiddenSearch.value = event.target.value;
  });

  hiddenSearch.addEventListener("input", (event) => {
    visibleSearch.value = event.target.value;
  });
};

unionSearchInputs();

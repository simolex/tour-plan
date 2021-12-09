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

const activateFakeMap = () => {
  const mapViewport = document.querySelector(".map-viewport");
  const loadMap = () => {
    mapViewport.innerHTML = `
      <iframe
        class="map-viewport__frame"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63281.253839198354!2d79.79499280230297!3d7.5664353377695255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2c96110de8289%3A0x3fd7668bc2d85eb9!2sGrand%20Hilton%20Hotel!5e0!3m2!1sru!2sru!4v1637658701637!5m2!1sru!2sru"
        allowfullscreen=""
        loading="lazy"
        >
      </iframe>
      `;
    mapViewport.removeEventListener("click", loadMap);
    mapViewport.removeEventListener("drag", loadMap);
    mapViewport.removeEventListener("mouseover", loadMap);
  };

  mapViewport.addEventListener("click", loadMap);
  mapViewport.addEventListener("drag", loadMap);
  mapViewport.addEventListener("mouseover", loadMap);
};

activateFakeMap();

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Best Tour Plan - Hotel Booking</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;600;700&family=Nunito:wght@400;600;800&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/style.css" />

    <script src="js/swiper-bundle.min.js" defer></script>
    <script src="js/jquery.core.min.js" defer></script>
    <script src="js/jquery.validate.min.js" defer></script>
    <script src="js/jquery.mask.min.js" defer></script>
    <script src="js/validation.js" defer></script>
    <script src="js/main.js" defer></script>
    <script src="js/modal.js" defer></script>
  </head>
  <body class="body">
    <header class="navbar navbar--mobile--fixed">
      <div class="container">
        <div class="navbar-top">
          <a href="/tour-plan" class="logo">
            <img src="img/horizontal-logo.svg" alt="Logo: Best Tour Plan" class="logo__image" />
          </a>
          <form action="#" class="search navbar__search navbar__search--mobile--hidden">
            <input type="text" class="search__input" placeholder="Search Location" />
            <div class="search__button">
              <button class="button button--inline">
                <img src="img/search.svg" alt="Icon: search" />
              </button>
            </div>
          </form>
          <a href="#" class="user navbar__user navbar__user--mobile--hidden">
            <img src="img/user-avatar.jpg" alt="Avatar: Nathan" class="user__avatar" />
            <span class="user__name">Nathan</span>
          </a>
          <!-- /.user -->
          <button class="menu-burger navbar-top__menu-burger">
            <span class="menu-burger__line"></span>
            <span class="menu-burger__line"></span>
            <span class="menu-burger__line"></span>
          </button>
        </div>
        <!-- /.navbar-top -->
      </div>
      <!-- /.container -->
      <div class="navbar-bottom">
        <div class="container">
          <ul class="navbar-menu">
            <li class="navbar-menu__item navbar-menu__item--mobile--visible">
              <a href="#" class="user navbar__user navbar__user--mobile--visible">
                <img src="img/user-avatar.jpg" alt="Avatar: Nathan" class="user__avatar" />
                <span class="user__name user__name--light">Nathan</span>
              </a>
            </li>
            <li class="navbar-menu__item navbar-menu__item--mobile--visible">
              <form action="#" class="search navbar__search navbar__search--mobile--visible">
                <input type="text" class="search__input" placeholder="Search Location" />
                <button class="search__button">
                  <img src="img/search.svg" alt="Icon: search" />
                </button>
              </form>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">All Deals</a>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">Hotels</a>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">Activities</a>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">Hotel Day Packages</a>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">Restaurants</a>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">Events</a>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">Rodrigues</a>
            </li>
          </ul>
          <!-- /.navbar-menu -->
        </div>
        <!-- /.container -->
      </div>
      <!-- /.navbar-bottom -->
    </header>
    <!-- /.navbar -->
    <nav class="breadcrumb">
      <div class="container">
        <ul class="breadcrumb-list">
          <li class="breadcrumb-list__item">
            <a href="#" class="breadcrumb-list__link">Home</a>
          </li>
          <li class="breadcrumb-list__item">
            <a href="#" class="breadcrumb-list__link">Flash Offers</a>
          </li>
          <li class="breadcrumb-list__item">Grand Hilton Hotel</li>
        </ul>
      </div>
    </nav>
    <!-- /.breadcrumb -->
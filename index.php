<?php include_once "header.php"?>

<section class="hotel">
   <div class="container">
      <div class="hotel-info">
         <div class="hotel-info__about">
         <div class="hotel-wrapper">
            <div class="stars hotel-info__stars">
               <svg class="stars__once"><use xlink:href="img/common.svg#star"></use></svg>
               <svg class="stars__once"><use xlink:href="img/common.svg#star"></use></svg>
               <svg class="stars__once"><use xlink:href="img/common.svg#star"></use></svg>
               <svg class="stars__once"><use xlink:href="img/common.svg#star"></use></svg>
               <svg class="stars__once"><use xlink:href="img/common.svg#star"></use></svg>
            </div>
            <h1 class="hotel-info__title">Grand Hilton Hotel</h1>
            <span class="offer hotel-info__offer">Flash Offer</span>
         </div>
         <p class="hotel-info__description">
            Half-Board/ All Inclusive +&nbsp;Complimentary Activities&nbsp;+&nbsp;Child Stays Free
         </p>
         </div>
         <div class="rating hotel-info__rating">
         <span class="rating__name">User Rattings</span>
         <span class="rating__counter">
            <span class="rating__counter rating__counter--numerator">4.5/</span>
            <span class="rating__counter rating__counter--denominator">5</span>
         </span>
         </div>
      </div>
      <!-- /.hotel-info -->
      <div class="hotel-grid">
         <div class="swiper hotel-slider hotel__slider">
         <div class="swiper-wrapper">
            <div class="swiper-slide hotel-slider__item">
               <img
               data-src="img/hotel-slides/hotel-slide-1.jpg"
               class="swiper-lazy hotel-slider__image"
               src="img/wallpaper.svg"
               alt="Foto: Any Hotels"
               />
               <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
            </div>
            <div class="swiper-slide hotel-slider__item">
               <img
               class="swiper-lazy hotel-slider__image"
               data-src="img/hotel-slides/hotel-slide-2.jpg"
               src="img/wallpaper.svg"
               alt="Foto: Any Hotels"
               />
               <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
            </div>
            <div class="swiper-slide hotel-slider__item">
               <img
               class="swiper-lazy hotel-slider__image"
               data-src="./img/hotel-slides/hotel-slide-3.jpg"
               src="img/wallpaper.svg"
               alt="Foto: Any Hotels"
               />
               <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
            </div>
            <div class="swiper-slide hotel-slider__item">
               <img
               class="swiper-lazy hotel-slider__image"
               data-src="./img/hotel-slides/hotel-slide-4.jpg"
               src="img/wallpaper.svg"
               alt="Foto: Any Hotels"
               />
               <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
            </div>
            <div class="swiper-slide hotel-slider__item">
               <img
               class="swiper-lazy hotel-slider__image"
               data-src="./img/hotel-slides/hotel-slide-5.jpg"
               src="img/wallpaper.svg"
               alt="Foto: Any Hotels"
               />
               <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
            </div>
         </div>
         <!-- /.swiper-wrapper -->
         <button class="hotel-slider__button hotel-slider__button--prev">
            <svg class="hotel-slider__arrow">
               <title>Arrow previous</title>
               <use xlink:href="img/common.svg#arrow"></use>
            </svg>
         </button>
         <button class="hotel-slider__button hotel-slider__button--next">
            <svg class="hotel-slider__arrow">
               <title>Arrow next</title>
               <use xlink:href="img/common.svg#arrow" transform="rotate(-180 5 9)"></use>
            </svg>
         </button>
         </div>
         <!-- /.hotel-slider -->
         <div class="hotel-board">
         <div class="booking">
            <div class="booking__info">
               <div class="booking__price">
               <span class="booking__start">price starts as</span>
               <strong class="booking__value">$ 8,500</strong>
               <span class="booking__per-room">per room / night</span>
               </div>
               <!-- /.booking__price -->
               <div class="booking__room">
               <div class="booking__text">
                  <svg class="booking__icon"><use xlink:href="img/common.svg#user"></use></svg>
                  <span class="booking__factor">2 x Guests</span>
               </div>
               <div class="booking__text">
                  <svg class="booking__icon"><use xlink:href="img/common.svg#home"></use></svg>
                  <span class="booking__factor">1 x Room</span>
               </div>
               </div>
               <!-- /.booking__room -->
            </div>
            <!-- /.booking__info -->
            <div class="booking__phone-call">
               <span class="booking__quick">Quick Booking</span>
               <a class="booking__phone-number" href="tel:12100">
               <svg class="booking__icon"><use xlink:href="img/common.svg#phone"></use></svg>
               <span class="booking__phone-display">12100</span>
               </a>
            </div>
            <!-- /.booking__phone-call -->
            <button data-toggle="modal" data-href="booking-modal" class="button booking__button">
               View Other Options
            </button>
         </div>
         <!-- /.booking -->
         <div class="map-viewport">
            <picture>
               <source srcset="img/map-viewport.avif" type="image/avif" />
               <source srcset="img/map-viewport.webp" type="image/webp" />
               <img src="img/map-viewport.jpg" alt="location: Google Map" />
            </picture>
         </div>
         <!-- /.map -->
         </div>
         <!-- /.hotel-board -->
      </div>
      <!-- /.hotel-grid -->
   </div>
</section>
<!-- /.hotel -->
<section class="packages">
   <div class="container">
      <h2 class="packages__title">Other Packages</h2>
      <div class="packages-wrapper">
         <div class="card-sale card-sale--primary">
         <div class="card-sale__preview">
            <picture class="card-sale__image">
               <source srcset="img/other-packages/trip-package-main-1.webp" type="image/webp" />
               <source srcset="img/other-packages/trip-package-main-1.avif" type="image/avif" />
               <img
               class="card-sale__image"
               src="img/other-packages/trip-package-main-1.jpg"
               alt="Foto: Hotel Blue Haven"
               />
            </picture>
            <span class="offer card-sale__offer card-sale__offer--primary">Flash Offer</span>
         </div>
         <div class="card-sale__info card-sale__info--primary">
            <div class="card-sale__content card-sale__content--primary">
               <div class="card-sale__up-side">
               <div class="stars card-sale__stars">
                  <svg class="stars__once"><use xlink:href="img/common.svg#star"></use></svg>
                  <svg class="stars__once"><use xlink:href="img/common.svg#star"></use></svg>
                  <svg class="stars__once"><use xlink:href="img/common.svg#star"></use></svg>
                  <svg class="stars__once"><use xlink:href="img/common.svg#star"></use></svg>
                  <svg class="stars__once"><use xlink:href="img/common.svg#star"></use></svg>
               </div>
               <h3 class="card-sale__hotel-name">Hotel Blue Haven</h3>
               </div>
               <div class="card-sale__body">
               <p class="card-sale__description">
                  Aute quis duis excepteur excepteur ipsum cat eiusmod consectetur enim laborum
                  magna llit. Ipsum est fugiat velit ea llamco do esse ut in veniam sun in
                  onsequat. Aute quis duis epteur excepteur ipsum occaecat eiusmod nsectetur enim
                  laborum magna mollit. Ipsum est fugiat velit ea ullamco do
               </p>
               <div class="book-room card-sale__room">
                  <div class="book-room__text">
                     <svg class="book-room__icon">
                     <title>Icon: Address</title>
                     <use xlink:href="img/common.svg#map-pin"></use>
                     </svg>
                     <span class="book-room__factor">1749 Wheeler Ridge Delaware</span>
                  </div>
                  <div class="book-room__text">
                     <svg class="book-room__icon">
                     <use xlink:href="img/common.svg#user"></use>
                     </svg>
                     <span class="book-room__factor">2 x Guests</span>
                  </div>
                  <div class="book-room__text">
                     <svg class="book-room__icon">
                     <use xlink:href="img/common.svg#home"></use>
                     </svg>
                     <span class="book-room__factor">1 x Room</span>
                  </div>
               </div>
               <span class="card-sale__old-price">$ 10,500</span>
               </div>
               <div class="card-sale__purchase">
               <span class="card-sale__price">$ 8,500</span>
               <button
                  data-toggle="modal"
                  data-href="booking-modal"
                  class="button card-sale__button"
               >
                  Book Now
               </button>
               </div>
            </div>
         </div>
         </div>
         <!-- /.card-sale -->
         <div class="card-sale">
         <div class="card-sale__preview">
            <picture class="card-sale__image">
               <source srcset="img/other-packages/trip-package-1.webp" type="image/webp" />
               <source srcset="img/other-packages/trip-package-1.avif" type="image/avif" />
               <img
               class="card-sale__image"
               src="img/other-packages/trip-package-1.jpg"
               alt="Foto: LUX* Belle Mare"
               />
            </picture>
            <span class="offer card-sale__offer">Flash Offer</span>
         </div>
         <div class="card-sale__info">
            <div class="card-sale__content">
               <div class="card-sale__up-side">
               <h3 class="card-sale__hotel-name">LUX* Belle Mare</h3>
               </div>
               <div class="card-sale__body">
               <div class="book-room card-sale__room">
                  <div class="book-room__text">
                     <svg class="book-room__icon">
                     <title>Icon: Address</title>
                     <use xlink:href="img/common.svg#map-pin"></use>
                     </svg>
                     <span class="book-room__factor">1749 Wheeler Ridge Delaware</span>
                  </div>
                  <div class="book-room__text">
                     <svg class="book-room__icon">
                     <use xlink:href="img/common.svg#user"></use>
                     </svg>
                     <span class="book-room__factor">2 x Guests</span>
                  </div>
                  <div class="book-room__text">
                     <svg class="book-room__icon">
                     <use xlink:href="img/common.svg#home"></use>
                     </svg>
                     <span class="book-room__factor">1 x Room</span>
                  </div>
               </div>
               <span class="card-sale__old-price">$ 8,500</span>
               </div>
               <div class="card-sale__purchase">
               <span class="card-sale__price">$ 3,000</span>
               <button
                  data-toggle="modal"
                  data-href="booking-modal"
                  class="button card-sale__button"
               >
                  Book Now
               </button>
               </div>
            </div>
         </div>
         </div>
         <!-- /.card-sale -->
         <div class="card-sale">
         <div class="card-sale__preview">
            <picture class="card-sale__image">
               <source srcset="img/other-packages/trip-package-2.webp" type="image/webp" />
               <source srcset="img/other-packages/trip-package-2.avif" type="image/avif" />
               <img
               class="card-sale__image"
               src="img/other-packages/trip-package-2.jpg"
               alt="Foto: White Palace"
               />
            </picture>
            <span class="offer card-sale__offer">Flash Offer</span>
         </div>
         <div class="card-sale__info">
            <div class="card-sale__content">
               <div class="card-sale__up-side">
               <h3 class="card-sale__hotel-name">White Palace</h3>
               </div>
               <div class="card-sale__body">
               <div class="book-room card-sale__room">
                  <div class="book-room__text">
                     <svg class="book-room__icon">
                     <title>Icon: Address</title>
                     <use xlink:href="img/common.svg#map-pin"></use>
                     </svg>
                     <span class="book-room__factor">1749 Wheeler Ridge Delaware</span>
                  </div>
                  <div class="book-room__text">
                     <svg class="book-room__icon">
                     <use xlink:href="img/common.svg#user"></use>
                     </svg>
                     <span class="book-room__factor">2 x Guests</span>
                  </div>
                  <div class="book-room__text">
                     <svg class="book-room__icon">
                     <use xlink:href="img/common.svg#home"></use>
                     </svg>
                     <span class="book-room__factor">1 x Room</span>
                  </div>
               </div>
               <span class="card-sale__old-price">$ 10,500</span>
               </div>
               <div class="card-sale__purchase">
               <span class="card-sale__price">$ 9,500</span>
               <button
                  data-toggle="modal"
                  data-href="booking-modal"
                  class="button card-sale__button"
               >
                  Book Now
               </button>
               </div>
            </div>
         </div>
         </div>
         <!-- /.card-sale -->
         <div class="card-sale">
         <div class="card-sale__preview">
            <picture class="card-sale__image">
               <source srcset="img/other-packages/trip-package-3.webp" type="image/webp" />
               <source srcset="img/other-packages/trip-package-3.avif" type="image/avif" />
               <img
               class="card-sale__image"
               src="img/other-packages/trip-package-3.jpg"
               alt="Foto: Luxury Place"
               />
            </picture>
            <span class="offer card-sale__offer">Flash Offer</span>
         </div>
         <div class="card-sale__info">
            <div class="card-sale__content">
               <div class="card-sale__up-side">
               <h3 class="card-sale__hotel-name">Luxury Place</h3>
               </div>
               <div class="card-sale__body">
               <div class="book-room card-sale__room">
                  <div class="book-room__text">
                     <svg class="book-room__icon">
                     <title>Icon: Address</title>
                     <use xlink:href="img/common.svg#map-pin"></use>
                     </svg>
                     <span class="book-room__factor">1749 Wheeler Ridge Delaware</span>
                  </div>
                  <div class="book-room__text">
                     <svg class="book-room__icon">
                     <use xlink:href="img/common.svg#user"></use>
                     </svg>
                     <span class="book-room__factor">2 x Guests</span>
                  </div>
                  <div class="book-room__text">
                     <svg class="book-room__icon">
                     <use xlink:href="img/common.svg#home"></use>
                     </svg>
                     <span class="book-room__factor">1 x Room</span>
                  </div>
               </div>
               <span class="card-sale__old-price">$ 4,500</span>
               </div>
               <div class="card-sale__purchase">
               <span class="card-sale__price">$ 2,500</span>
               <button
                  data-toggle="modal"
                  data-href="booking-modal"
                  class="button card-sale__button"
               >
                  Book Now
               </button>
               </div>
            </div>
         </div>
         </div>
         <!-- /.card-sale -->
         <div class="card-sale">
         <div class="card-sale__preview">
            <picture class="card-sale__image">
               <source srcset="img/other-packages/trip-package-4.webp" type="image/webp" />
               <source srcset="img/other-packages/trip-package-4.avif" type="image/avif" />
               <img
               class="card-sale__image"
               src="img/other-packages/trip-package-4.jpg"
               alt="Foto: Hotel Five Star"
               />
            </picture>
            <span class="offer card-sale__offer">Flash Offer</span>
         </div>
         <div class="card-sale__info">
            <div class="card-sale__content">
               <div class="card-sale__up-side">
               <h3 class="card-sale__hotel-name">Hotel Five Star</h3>
               </div>
               <div class="card-sale__body">
               <div class="book-room card-sale__room">
                  <div class="book-room__text">
                     <svg class="book-room__icon">
                     <title>Icon: Address</title>
                     <use xlink:href="img/common.svg#map-pin"></use>
                     </svg>
                     <span class="book-room__factor">1749 Wheeler Ridge Delaware</span>
                  </div>
                  <div class="book-room__text">
                     <svg class="book-room__icon">
                     <use xlink:href="img/common.svg#user"></use>
                     </svg>
                     <span class="book-room__factor">2 x Guests</span>
                  </div>
                  <div class="book-room__text">
                     <svg class="book-room__icon">
                     <use xlink:href="img/common.svg#home"></use>
                     </svg>
                     <span class="book-room__factor">1 x Room</span>
                  </div>
               </div>
               <span class="card-sale__old-price">$ 6,500</span>
               </div>
               <div class="card-sale__purchase">
               <span class="card-sale__price">$ 3,500</span>
               <button
                  data-toggle="modal"
                  data-href="booking-modal"
                  class="button card-sale__button"
               >
                  Book Now
               </button>
               </div>
            </div>
         </div>
         </div>
         <!-- /.card-sale -->
      </div>
      <!-- /.packages-wrapper -->
   </div>
   <!-- /.container -->
</section>
<!-- /.packages -->
<section class="newsletter">
   <div class="newsletter-container">
      <h2 class="newsletter-title">
         subscribe to our
         <span class="newsletter-title__strong">Newsletter</span>
      </h2>
      <div class="newsletter__group">
         <form action="send.php" method="post" class="form subscribe newsletter__subscribe">
         <input type="hidden" name="type" value="newsletter" />
         <input
            type="email"
            class="subscribe__input"
            placeholder="Your email address"
            name="email"
            required
         />
         <div class="subscribe__button"><button class="button button--inline">Send</button></div>
         </form>
      </div>
   </div>
   <!-- /.newsletter-container -->
</section>
<!-- /.newsletter -->
<section class="reviews">
   <div class="container">
      <h2 class="reviews__title">What people think about&nbsp;us</h2>
      <div class="swiper reviews-slider">
         <div class="swiper-wrapper">
         <div class="swiper-slide">
            <div class="reviews-slider__item">
               <div class="reviews-slider__profile">
               <img
                  src="img/review-avatars/review-avatar-1.jpg"
                  alt="Photo: Megan Fox"
                  class="reviews-slider__avatar"
               />
               <h3 class="reviews-slider__username">Megan Fox</h3>
               <span class="reviews-slider__date">Stayed 18 Nov, 2019</span>
               <div class="stars reviews-slider__rating">
                  <svg class="stars__once"><use xlink:href="img/common.svg#star"></use></svg>
                  <svg class="stars__once"><use xlink:href="img/common.svg#star"></use></svg>
                  <svg class="stars__once"><use xlink:href="img/common.svg#star"></use></svg>
                  <svg class="stars__once"><use xlink:href="img/common.svg#star"></use></svg>
                  <svg class="stars__once"><use xlink:href="img/common.svg#star"></use></svg>
               </div>
               <!-- /.reviews-slider__rating -->
               </div>
               <!-- /. -->
               <p class="reviews-slider__review-text">
               It was very nice hotel with cleanliness. Staff behavior was good and polite. They
               welcome us very well. Issue was only that Lift was not in working and we were
               allotted to 3rd floor and amenities articles were in corner of gallery which were
               giving bad feeling. Breakfast was good and support of the staff was also very
               nice. Location is not good as per atmosphere, it is very nearby most of the
               popular places but self location in a narrow street is not good. Overall it was a
               good experience and could recommend.
               </p>
               <!-- /.reviews-slider__review-text -->
            </div>
            <!-- /.reviews-slider__item -->
         </div>
         <!-- /.swiper-slide -->
         <div class="swiper-slide">
            <div class="reviews-slider__item">
               <div class="reviews-slider__profile">
               <img
                  src="img/review-avatars/review-avatar-1.jpg"
                  alt="Photo: Megan Fox"
                  class="reviews-slider__avatar"
               />
               <h3 class="reviews-slider__username">Megan Fox2</h3>
               <span class="reviews-slider__date">Stayed 18 Nov, 2019</span>
               <div class="stars reviews-slider__rating">
                  <svg class="stars__once"><use xlink:href="img/common.svg#star"></use></svg>
                  <svg class="stars__once"><use xlink:href="img/common.svg#star"></use></svg>
                  <svg class="stars__once"><use xlink:href="img/common.svg#star"></use></svg>
                  <svg class="stars__once"><use xlink:href="img/common.svg#star"></use></svg>
                  <svg class="stars__once"><use xlink:href="img/common.svg#star"></use></svg>
               </div>
               <!-- /.reviews-slider__rating -->
               </div>
               <!-- /. -->
               <p class="reviews-slider__review-text">
               It was very nice hotel with cleanliness. Staff behavior was good and polite. They
               welcome us very well. Issue was only that Lift was not in working and we were
               allotted to 3rd floor and amenities articles were in corner of gallery which were
               giving bad feeling. Breakfast was good and support of the staff was also very
               nice. Location is not good as per atmosphere, it is very nearby most of the
               popular places but self location in a narrow street is not good. Overall it was a
               good experience and could recommend.
               </p>
               <!-- /.reviews-slider__review-text -->
            </div>
            <!-- /.reviews-slider__item -->
         </div>
         <!-- /.swiper-slide -->
         </div>
         <!-- /.swiper-wrapper -->
         <button class="reviews-slider__button reviews-slider__button--prev">
         <svg class="reviews-slider__arrow">
            <title>Arrow previous</title>
            <use xlink:href="img/common.svg#arrow"></use>
         </svg>
         </button>
         <button class="reviews-slider__button reviews-slider__button--next">
         <svg class="reviews-slider__arrow">
            <title>Arrow next</title>
            <use xlink:href="img/common.svg#arrow" transform="rotate(-180 5 9)"></use>
         </svg>
         </button>
      </div>
      <!-- /.reviews-slider -->
   </div>
   <!-- /.container -->
</section>
<!-- /.reviews -->
<section class="activities">
   <div class="container">
      <h2 class="activities__title">Other Activities</h2>
      <div class="activities-wrapper">
         <div class="card activities__card">
         <picture class="card__image">
            <source srcset="img/other-activities/activity-1.avif" type="image/avif" />
            <source srcset="img/other-activities/activity-1.webp" type="image/webp" />
            <img
               class="card__image"
               src="img/other-activities/activity-1.jpg"
               alt="The curious corner of chamarel"
            />
         </picture>
         <h3 class="card__title">The curious corner of&nbsp;chamarel</h3>
         <button data-toggle="modal" data-href="booking-modal" class="button card__button">
            Book Now
         </button>
         </div>
         <!-- /.card -->
         <div class="card activities__card">
         <picture class="card__image">
            <source srcset="img/other-activities/activity-2.avif" type="image/avif" />
            <source srcset="img/other-activities/activity-2.webp" type="image/webp" />
            <img
               class="card__image"
               src="img/other-activities/activity-2.jpg"
               alt="Gymkhana club golf course"
            />
         </picture>
         <h3 class="card__title">Gymkhana club golf course</h3>
         <button data-toggle="modal" data-href="booking-modal" class="button card__button">
            Book Now
         </button>
         </div>
         <!-- /.card -->
         <div class="card activities__card">
         <picture class="card__image">
            <source srcset="img/other-activities/activity-3.avif" type="image/avif" />
            <source srcset="img/other-activities/activity-3.webp" type="image/webp" />
            <img
               class="card__image"
               src="img/other-activities/activity-3.jpg"
               alt="Tamarind falls hiking trip - full day"
            />
         </picture>
         <h3 class="card__title">Tamarind falls hiking trip&nbsp;-&nbsp;full day</h3>
         <button data-toggle="modal" data-href="booking-modal" class="button card__button">
            Book Now
         </button>
         </div>
         <!-- /.card -->
         <div class="card activities__card">
         <picture class="card__image">
            <source srcset="img/other-activities/activity-4.avif" type="image/avif" />
            <source srcset="img/other-activities/activity-4.webp" type="image/webp" />
            <img
               class="card__image"
               src="img/other-activities/activity-4.jpg"
               alt="The blue marine discovery quest"
            />
         </picture>
         <h3 class="card__title">The blue marine discovery quest</h3>
         <button data-toggle="modal" data-href="booking-modal" class="button card__button">
            Book Now
         </button>
         </div>
         <!-- /.card -->
      </div>
      <!-- /.activities-wrapper -->
   </div>
   <!-- /.container -->
</section>
<!-- /.activities -->

<?php include_once "footer.php" ?>
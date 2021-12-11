  <footer class="footer">
      <div class="container">
        <div class="footer-wrapper">
          <a href="/tour-plan" class="logo footer__logo">
            <img src="img/footer-logo.svg" alt="Logo: Best Tour Plan" />
          </a>

          <div class="footer__list footer__categories">
            <h3 class="footer__title">All categories</h3>
            <ul class="footer__ul">
              <li class="footer__item">
                <a href="#" class="footer__link">All Deals</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Hotels</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Activities</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Spa Packages</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Hotel Day Packages</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Restaurants</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Fitness</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Rodrigues</a>
              </li>
            </ul>
          </div>
          <!-- /.footer__list -->
          <div class="footer__list footer__additional">
            <h3 class="footer__title">Additional information</h3>
            <ul class="footer__ul">
              <li class="footer__item">
                <a href="#" class="footer__link">About Us</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Contact Us</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">How does it work?</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Frequently Asked Questions</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Deals.mu loyalty program</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Promote your Business on BTP</a>
              </li>
            </ul>
          </div>
          <!-- /.footer__list -->
          <div class="footer__social-network">
            <h3 class="footer__title footer__title--inline">Social Network</h3>
            <div class="footer__social-links">
              <a href="#" class="footer__link">
                <svg class="footer__icon">
                  <use xlink:href="img/footer.svg#facebook"></use>
                </svg>
              </a>
              <a href="#" class="footer__link">
                <svg class="footer__icon">
                  <use xlink:href="img/footer.svg#youtube"></use>
                </svg>
              </a>
              <a href="#" class="footer__link">
                <svg class="footer__icon">
                  <use xlink:href="img/footer.svg#instagram"></use>
                </svg>
              </a>
            </div>
          </div>
          <!-- /.footer__social-network -->
          <div class="footer__list footer__legal">
            <h3 class="footer__title">Legal information</h3>
            <ul class="footer__ul">
              <li class="footer__item">
                <a href="#" class="footer__link">Terms & Conditions</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Disclaimer</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Cancellation policy</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Privacy</a>
              </li>
            </ul>
          </div>
          <!-- /.footer__list -->
          <div class="footer__contact-details footer__contact-details--mt-10">
            <h3 class="footer__title footer__title--mb-25">Contact Details</h3>
            <p class="footer__text">
              Feel free to contact us by phone, email or by our contact form
            </p>
            <ul class="footer__ul footer__ul--ml-5">
              <li class="footer__item footer__item--mb-2">
                <div class="footer__contact-icon-wrapper">
                  <img src="img/map-marker.svg" alt="Icon: Map" class="footer__contact-icon" />
                </div>
                9748 Blossom Hill Rd undefined Lansing, Idaho 68545 United States
              </li>
              <li class="footer__item footer__item--mb-2">
                <div class="footer__contact-icon-wrapper">
                  <img
                    src="img/contact-phone-call.svg"
                    alt="Icon: Phone call"
                    class="footer__contact-icon"
                  />
                </div>

                <div class="footer__contact-line-wrapper">
                  <div class="footer__contact-line">
                    Tel (business hours) :
                    <a href="tel:2691500" class="footer__contact-phone">269 1500</a>
                  </div>
                  <div class="footer__contact-line">
                    Tel (hotline) Monday - Saturday:
                    <a href="tel:52566138" class="footer__contact-phone">52-56-61-38</a>
                    (08:00&nbsp;am&nbsp;-&nbsp;20:00&nbsp;pm)
                  </div>
                  <div class="footer__contact-line">
                    Tel (hotline) Sunday:
                    <a href="tel:52566138" class="footer__contact-phone">52-56-61-38</a> (08:00 am –
                    14:00 pm)
                  </div>
                </div>
              </li>
              <li class="footer__item footer__item--mb-2">
                <div class="footer__contact-icon-wrapper">
                  <img src="img/email.svg" alt="Icon: Email" class="footer__contact-icon" />
                </div>
                <a href="mailto:cherly.lawson@example.com" class="footer__contact-email">
                  cherly.lawson@example.com
                </a>
              </li>
            </ul>
            <!-- /.footer__ul -->
          </div>
          <!-- /.footer__contact-details -->

          <div class="footer__contact-form footer__contact-form--ml-5">
            <h3 class="footer__title footer__title--mb-32">Send us a message</h3>
            <form action="send.php" method="post" class="form footer__form">
              <input type="hidden" name="type" value="feedback" />
              <div class="footer__input-group">
                <input
                  type="text"
                  class="input footer__input"
                  placeholder="Your Full Name*"
                  name="name"
                  required
                />
              </div>
              <div class="footer__input-group">
                <input
                  type="tel"
                  class="input footer__input"
                  placeholder="Phone Number*"
                  name="phone"
                  data-mask="+7 (000) 000-00-00"
                  required
                />
              </div>
              <textarea
                class="message footer__message"
                placeholder="Message"
                name="message"
              ></textarea>
              <button class="button footer__button" type="submit">Send</button>
              <span class="footer__info">* Required Fields</span>
            </form>
          </div>
          <!-- /.footer__contact-form -->
          <div class="footer__bottom-links">
            <ul class="footer__ul footer__ul--bottom">
              <li class="footer__item footer__item--bottom">
                <a href="#" class="footer__link">Disclaimer</a>
              </li>
              <li class="footer__item footer__item--bottom">
                <a href="#" class="footer__link">Conditions of use</a>
              </li>
              <li class="footer__item footer__item--bottom">
                <a href="#" class="footer__link">Cancellation policy</a>
              </li>
            </ul>
          </div>
          <img src="img/pay-systems.png" alt="Pay Systems" class="footer__bottom-image" />
          <!-- <div class="footer__bottom">
          </div> -->
          <!-- /.footer__bottom -->
        </div>
        <!-- /.footer-wrapper -->
      </div>
    </footer>
    <!-- /.footer -->
    <div class="modal" id="booking-modal">
      <div class="modal__overlay"></div>
      <!-- /.modal_overlay -->
      <div class="modal__dialog">
        <div class="modal__dialog-content">
          <a href="#" class="modal__close">
            <img src="img/modal-close.svg" alt="icon: close" />
          </a>
          <h3 class="modal__title">Booking</h3>
          <form action="send.php" method="post" class="form modal__form">
            <input type="hidden" name="type" value="booking" />
            <input
              type="text"
              class="input modal__input"
              placeholder="Your Full Name*"
              name="name"
              minlength="2"
              required
            />
            <input
              type="tel"
              class="input modal__input"
              placeholder="Phone Number*"
              name="phone"
              data-mask="+7 (000) 000-00-00"
              required
            />
            <input
              type="email"
              class="input modal__input"
              placeholder="Email*"
              name="email"
              required
            />
            <textarea
              class="message modal__message"
              placeholder="Message"
              name="message"
            ></textarea>
            <button class="button modal__button" type="submit">Send</button>
            <span class="modal__info">* Required Fields</span>
          </form>
        </div>
        <!-- /.modal_dialog -->
      </div>
      <!-- ./modal__dialog-wrapper -->
    </div>
    <!-- /.modal -->
  </body>
</html>
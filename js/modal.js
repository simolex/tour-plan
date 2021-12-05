const modalForm = () => {
  const modalButtons = document.querySelectorAll("[data-toggle=modal]");
  const closeButtons = document.querySelectorAll(".modal__close");

  modalButtons.forEach((itemModal) => {
    itemModal.addEventListener("click", (e) => OpenModal(e));
  });

  closeButtons.forEach((closeButton) => {
    closeButton.addEventListener("click", (e) => CloseModal(e));
  });

  const OpenModal = (event) => {
    const idModal = event.target.dataset.href;
    const modalContainer = document.getElementById(idModal);

    event.preventDefault();
    modalContainer.querySelector(".modal__overlay").classList.add("modal__overlay--visible");
    modalContainer.querySelector(".modal__dialog").classList.add("modal__dialog--visible");
    //toggleFixerBody();
  };

  const CloseModal = (event) => {
    const modalContainer = event.target.closest(".modal");

    event.preventDefault();
    modalContainer.querySelector(".modal__overlay").classList.remove("modal__overlay--visible");
    modalContainer.querySelector(".modal__dialog").classList.remove("modal__dialog--visible");
    //toggleFixerBody();
  };

  const pressEscape = (event) => {
    if (event.code == "Escape") {
      const allModal = document.querySelectorAll(".modal");

      allModal.forEach((itemModal) => {
        event.preventDefault();
        itemModal.querySelector(".modal__overlay").classList.remove("modal__overlay--visible");
        itemModal.querySelector(".modal__dialog").classList.remove("modal__dialog--visible");
        //toggleFixerBody();
      });
    }
  };

  document.onkeydown = pressEscape;
};

modalForm();

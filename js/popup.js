'use strict';

(function () {
  var btnStartNow = document.querySelector(".page-header-buttons__start-now");
  var loginPopup = document.querySelector(".popup--login");

  if (loginPopup) {
    var popupClose = loginPopup.querySelector(".popup__button-close");

    btnStartNow.addEventListener("click", function (evt) {
      evt.preventDefault();
      loginPopup.classList.add("popup-show");
    });

    popupClose.addEventListener("click", function (evt) {
      evt.preventDefault();
      loginPopup.classList.remove("popup-show");
    });

    window.addEventListener("keydown", function (evt) {
      if (evt.keyCode === 27) {
        if (loginPopup.classList.contains("popup-show")) {
          evt.preventDefault();
          loginPopup.classList.remove("popup-show");
        }
      }
    });
  }
})();

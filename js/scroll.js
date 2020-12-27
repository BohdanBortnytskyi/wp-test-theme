'use strict';

(function () {
  // Scroll to top
  const SCROLL_STEP = 30;
  var buttonTop = document.getElementById('button-top');

  buttonTop.addEventListener('click', function () {
    var scrollToTop = window.setInterval(function() {
      var positionY = window.pageYOffset;
      if (positionY > 0) {
          window.scrollTo(0, positionY - SCROLL_STEP);
      } else {
          window.clearInterval(scrollToTop);
      }
    }, 16);
  });

  // Scroll down to the advantages
  var btnLearnMore = document.querySelector('.page-header-buttons__learn-more');

  btnLearnMore.addEventListener('click', function () {
    var scrollToBlock = document.querySelector(".advantages");
    scrollToBlock.scrollIntoView({ behavior: 'smooth', block: 'start'});
  });
})();

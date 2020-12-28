'use strict';
// Switches header basckground according to theme options
(function () {
  var pageHeaderBottom = document.querySelector('.page-header__bottom');
  var videoBackground = document.querySelector('.page-header__bottom video');

  if (pageHeaderBottom.classList.contains('video-bg')) {
    pageHeaderBottom.style.background = 'none';
    videoBackground.style.display = 'block';
  } else {
    var pageHeaderBottomData = pageHeaderBottom.dataset.bg;
    pageHeaderBottom.style.backgroundImage = 'url(' + pageHeaderBottomData + ')';
  }
})();
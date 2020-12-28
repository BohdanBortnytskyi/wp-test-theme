'use strict';

(function () {
  var slides = document.querySelectorAll(".slider__list li");
  var sliderNext = document.querySelector(".slider__controls .next-slide");
  var sliderPrev = document.querySelector(".slider__controls .prev-slide");

  for(var i = 0; i < slides.length; i++) {
    if (i === 0) {
      slides[i].classList.add("slider__item--current");
    }
  }

  var sliderCurrent = 0;

  if(sliderNext && sliderPrev) {
    sliderNext.addEventListener("click", function () {
      sliderCurrent ++;

      if(sliderCurrent >= slides.length) {
        sliderCurrent = 0;
      }

      for(var i = 0; i < slides.length; i++) {
        if(i == sliderCurrent) {
          slides[i].classList.add("slider__item--current");
        } else {
          slides[i].classList.remove("slider__item--current");
        }
      }
    });

    sliderPrev.addEventListener("click", function () {
      sliderCurrent --;

      if(sliderCurrent < 0) {
        sliderCurrent = slides.length - 1;
      }

      for(var i = 0 ; i < slides.length ; i++) {
        if(i == sliderCurrent) {
          slides[i].classList.add("slider__item--current");
        } else {
          slides[i].classList.remove("slider__item--current");
        }
      }
    });
  }
})();

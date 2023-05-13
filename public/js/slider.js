/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!********************************!*\
  !*** ./resources/js/slider.js ***!
  \********************************/
var $sliderContainer = document.querySelector(".sliderContent__scroll");
var $sliderItems = document.querySelectorAll(".sliderContent__item");
var $btnNextSlide = document.querySelector(".sliderComponent__btn--right");
var $btnPrevSlide = document.querySelector(".sliderComponent__btn--left");
var slideWidth = $sliderItems[0].offsetWidth;
var curr_index = 0;
var nextSlide = function nextSlide() {
  curr_index++;
  if (curr_index >= $sliderItems.length) curr_index = 0;
  var slider_px = curr_index * -1 * slideWidth;
  $sliderContainer.style.transform = "translateX(".concat(slider_px, "px)");
  $sliderContainer.style.transition = "transform 0.5s linear";
};
var prevSlide = function prevSlide() {
  curr_index--;
  if (curr_index < 0) curr_index = $sliderItems.length - 1;
  var slider_px = curr_index * -1 * slideWidth;
  $sliderContainer.style.transform = "translateX(".concat(slider_px, "px)");
  $sliderContainer.style.transition = "transform 0.5s linear";
};

// Events
$btnNextSlide.addEventListener('click', nextSlide);
$btnPrevSlide.addEventListener('click', prevSlide);
/******/ })()
;
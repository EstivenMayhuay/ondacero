/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*********************************!*\
  !*** ./resources/js/ranking.js ***!
  \*********************************/
var $btnPlaysMusic = document.querySelectorAll(".galleryRanking__play");
var $audioTag = document.getElementById("audioMusic");
var urlMusic = "https://ondacero.com.pe/j/music";

// Events

$btnPlaysMusic.forEach(function (btnPlay) {
  btnPlay.addEventListener('click', function (e) {
    var route_file = e.target.dataset.urlSong;
    $audioTag.src = "".concat(urlMusic, "/").concat(route_file);
    $audioTag.play();
  });
});
/******/ })()
;
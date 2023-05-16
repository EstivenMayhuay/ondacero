/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*********************************!*\
  !*** ./resources/js/ranking.js ***!
  \*********************************/
var $btnPlaysMusic = document.querySelectorAll(".galleryRanking__play");
var $audioTag = document.getElementById("audioMusic");
var urlMusic = "https://ondacero.com.pe/j/music";
function pauseAllActiveMusic() {
  var $btnPlayActiveMusic = document.querySelectorAll(".galleryRanking__play.bx-pause");
  $btnPlayActiveMusic.forEach(function (btn) {
    btn.parentElement.parentElement.classList.remove("active");
    btn.classList.add("bx-play");
    btn.classList.remove("bx-pause");
  });
}

// Events
$btnPlaysMusic.forEach(function (btnPlay) {
  btnPlay.addEventListener('click', function (e) {
    var route_file = e.target.dataset.urlSong;
    $audioTag.src = "".concat(urlMusic, "/").concat(route_file);
    e.target.parentElement.parentElement.classList.toggle("active");
    if (e.target.classList.contains('bx-play')) {
      pauseAllActiveMusic();
      e.target.classList.remove("bx-play");
      e.target.classList.add("bx-pause");
      $audioTag.play();
    } else {
      e.target.classList.add("bx-play");
      e.target.classList.remove("bx-pause");
      $audioTag.pause();
    }
  });
});
/******/ })()
;
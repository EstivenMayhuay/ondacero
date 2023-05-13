require('./bootstrap');

window.Popper = require('@popperjs/core').default;
try {
    window.$ = window.jQuery = require('jquery');
    require('bootstrap');
} catch (e) {}

let $btnMenu = document.querySelector(".header__btn")
let $btnCloseMenu = document.querySelector(".navigation__button")
let $areaHiddenMenu = document.querySelector(".areaHiddenNav")
let $menu = document.querySelector(".navigation")

function toggleMenuNav () {
    $menu.classList.toggle("show")
    $areaHiddenMenu.classList.toggle("show")
}

/* Events */
$btnMenu.addEventListener('click', toggleMenuNav)
$btnCloseMenu.addEventListener('click', toggleMenuNav)
$areaHiddenMenu.addEventListener('click', toggleMenuNav)




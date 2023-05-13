const $sliderContainer = document.querySelector(".sliderContent__scroll")
const $sliderItems = document.querySelectorAll(".sliderContent__item")
const $btnNextSlide = document.querySelector(".sliderComponent__btn--right")
const $btnPrevSlide = document.querySelector(".sliderComponent__btn--left")
let slideWidth = $sliderItems[0].offsetWidth;
let curr_index = 0;

const nextSlide = () => {
    curr_index++;
    if(curr_index >= $sliderItems.length) curr_index = 0
    let slider_px = curr_index * -1 * slideWidth;
    $sliderContainer.style.transform = `translateX(${slider_px}px)`
    $sliderContainer.style.transition = "transform 0.5s linear"
}

const prevSlide = () => {
    curr_index--;
    if(curr_index < 0) curr_index = $sliderItems.length - 1
    let slider_px = curr_index * -1 * slideWidth
    $sliderContainer.style.transform = `translateX(${slider_px}px)`
    $sliderContainer.style.transition = "transform 0.5s linear"
}

// Events
$btnNextSlide.addEventListener('click', nextSlide)
$btnPrevSlide.addEventListener('click', prevSlide)

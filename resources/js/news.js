let $btnOpenFilterNews = document.getElementById("btnOpenFilterNews")
let $navFilters = document.querySelector(".filters")

$btnOpenFilterNews.addEventListener('click', () => {
    $navFilters.classList.toggle('show')
})

let $btnPlaysMusic = document.querySelectorAll(".galleryRanking__play")
let $audioTag = document.getElementById("audioMusic");
const urlMusic = "https://ondacero.com.pe/j/music";

// Events

$btnPlaysMusic.forEach((btnPlay) => {
    btnPlay.addEventListener('click', function(e) {
        let route_file = e.target.dataset.urlSong;
        $audioTag.src = `${urlMusic}/${route_file}`
        $audioTag.play()
    })
})

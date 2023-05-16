let $btnPlaysMusic = document.querySelectorAll(".galleryRanking__play")
let $audioTag = document.getElementById("audioMusic");
const urlMusic = "https://ondacero.com.pe/j/music";


function pauseAllActiveMusic () {
    let $btnPlayActiveMusic = document.querySelectorAll(".galleryRanking__play i.bx-pause");

    $btnPlayActiveMusic.forEach((btn) => {
        btn.classList.add("bx-play")
        btn.classList.remove("bx-pause")
    })
}

// Events
$btnPlaysMusic.forEach((btnPlay) => {
    btnPlay.addEventListener('click', function(e) {
        let route_file = e.target.dataset.urlSong;
        $audioTag.src = `${urlMusic}/${route_file}`

        if(e.target.tagName == "I") {
            if(e.target.classList.contains('bx-play')){
                pauseAllActiveMusic();

                e.target.classList.remove("bx-play")
                e.target.classList.add("bx-pause")
                $audioTag.play()
            } else {
                e.target.classList.add("bx-play")
                e.target.classList.remove("bx-pause")
                $audioTag.pause()
            }
        }
    })
})

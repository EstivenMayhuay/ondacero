<div class="contentGalleryRanking">
    <section class="galleryRanking">
        @foreach ($arrMusics as $music)
            <article class="galleryRanking__item rounded bg-white">
                <div  class="galleryRanking__item__image d-block mw-100">
                    <img src="https://ondacero.com.pe/j/images/rankings/{{$music->urlPhoto}}" alt="{{$music->titleSong}}" width="120" height="auto" class="w-100">
                    <button class="galleryRanking__play border-0 p-0 m-0 rounded-circle onda-bg-green d-flex align-items-center justify-content-center">
                        <i class='bx bx-play text-white fw-bold'></i>
                    </button>
                </div>
                <p class="galleryRanking__position d-flex align-items-center justify-content-center m-0 p-2 onda-bg-primary rounded-circle fw-bold shadow">{{$music->position}}</p>
                <div class="p-2">
                    <h2 class="fs-6 fw-bold">{{$music->titleSong}}</h2>
                    <p class="m-0 p-0 text-opaque text-sm">{{$music->authorSong}}</p>
                </div>
            </article>
        @endforeach
    </section>
</div>

<b:push>

    <style>
        .galleryRanking {
            display: grid;
            grid-template-columns: 1fr;
            align-content: center;
            row-gap: 1rem;
        }

        .galleryRanking__item {
            position: relative;
            width: 220px;
            max-width: 220px;
            margin: 0 auto;
        }

        .galleryRanking__item__image {
            position: relative;
            height: 220px;
            max-height: 220px;
        }

        .galleryRanking__item__image img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .galleryRanking__position {
            position: absolute;
            top: 5px;
            left: 5px;
            width: 28px;
            height: 28px;
        }

        .galleryRanking__play {
            --wPlayIcon: 42px;

            position: absolute;
            bottom: 4px;
            right: 4px;
            width: var(--wPlayIcon);
            height: var(--wPlayIcon);
        }

        .galleryRanking__play i {
            font-size: 26px;
        }

        @media screen and (min-width: 768px) {
            .galleryRanking {
                grid-template-columns: repeat(3, 1fr);
                gap: 1.5rem;
            }
        }

        @media screen and (min-width: 1024px) {
            .galleryRanking {
                grid-template-columns: repeat(4, 1fr);
            }
        }
    </style>

</b:push>

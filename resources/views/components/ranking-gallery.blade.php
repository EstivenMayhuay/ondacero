<div class="contentGalleryRanking position-relative">
    <section class="galleryReproductor d-flex justify-content-center my-5">
        <audio src="https://ondacero.com.pe/j/music/" controls id="audioMusic"></audio>
    </section>
    <section class="galleryRanking">
        @foreach ($arrMusics as $music)
            <article class="galleryRanking__item rounded bg-white">
                <div  class="galleryRanking__item__image d-block mw-100">
                    <img src="https://ondacero.com.pe/j/images/rankings/{{$music->urlPhoto}}" alt="{{$music->titleSong}}" width="120" height="auto" class="w-100" loading="lazy">
                    <i class='galleryRanking__play bx bx-play text-white fw-bold onda-bg-green rounded-circle d-flex align-items-center justify-content-center' data-url-song="{{$music->urlSong}}"></i>
                </div>
                <p class="galleryRanking__position d-flex align-items-center justify-content-center m-0 p-2 onda-bg-primary rounded-circle fw-bold shadow">{{$music->position}}</p>
                <div class="galleryRanking__info p-2">
                    <h2 class="fs-6 fw-bold">{{$music->titleSong}}</h2>
                    <p class="m-0 p-0 text-opaque text-sm">{{$music->authorSong}}</p>
                </div>
            </article>
        @endforeach
    </section>
</div>

<b:push>

    <style>
        .galleryReproductor {
            position: sticky;
            top: 1rem;
            margin-bottom: 4rem;
            z-index: 90;
        }

        .galleryRanking {
            display: grid;
            grid-template-columns: 1fr;
            align-content: center;
            gap: 1.5rem;
        }

        .galleryRanking__item {
            position: relative;
            width: calc(100% - 2rem);
            max-width: calc(100% - 2rem);
            margin: 0 auto;
            overflow: hidden;
        }

        .galleryRanking__item__image {
            position: relative;
            height: 220px;
            max-height: 220px;
            overflow: hidden;
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
            font-size: 26px;
            cursor: pointer;
        }

        .galleryRanking__item:hover {
            transform: scale(0.98);
            transition: transform 0.5s ease;
            box-shadow: 0 6px 8px rgba(0, 0,0 ,0.25);
        }

        .galleryRanking__item.active {
            background-color: #262b31 !important;
            transition: background-color 0.5s linear;
            animation: shake 0.45s linear alternate infinite;
            box-shadow: 0 6px 8px rgba(0, 0,0 ,0.5);
        }

        @keyframes shake {
            from {
                transform: rotate(3deg);
            }
            to {
                transform: rotate(-3deg);
            }
        }

        .galleryRanking__item.active .galleryRanking__info {
            color: white;
        }

        .galleryRanking__play:active {
            filter: brightness(1.05);
            cursor: pointer;
        }

        .galleryRanking__play:active {
            cursor: pointer;
            transform: scale(0.85);
            transition: transform 0.5s linear;
        }

        @media screen and (min-width: 768px) {
            .galleryRanking {
                grid-template-columns: repeat(3, 1fr);
            }

            .galleryRanking__item {
                width: 220px;
                max-width: 220px;
            }
        }

        @media screen and (min-width: 1024px) {
            .galleryRanking {
                grid-template-columns: repeat(4, 1fr);
            }
        }
    </style>

</b:push>

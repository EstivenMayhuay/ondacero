<div class="sliderComponent">
    <button class="sliderComponent__btn sliderComponent__btn--left">
        <i class='bx bxs-chevron-left' ></i>
    </button>
    <button class="sliderComponent__btn sliderComponent__btn--right">
        <i class='bx bxs-chevron-right' ></i>
    </button>
    <div class="sliderContent">
        <ul class="sliderContent__scroll">
            @foreach ($arrNews as $new)
                <li class="sliderContent__item">
                    <img src="https://ondacero.com.pe/j/images/galerias/{{$new->urlPhoto}}" alt="{{$new->title}}" loading="lazy">
                    <h3>
                        <a href="">{{$new->title}}</a>
                    </h3>
                </li>
            @endforeach
        </ul>
    </ul>
</div>

<b:push>
    <style>
        .sliderComponent {
            position: relative;
            overflow: hidden;
        }

        .sliderContent {
            overflow: hidden;
        }

        .sliderContent__scroll {
            display: flex;
            padding: 0;
            list-style: none;
            margin: 0;
        }

        .sliderContent__item {
            position: relative;
            width: 100%;
            min-width: 100%;
        }

        .sliderContent__item h3 {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            display: block;
            width: 100%;
            margin: 0;
            font-size: 1.2rem;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 0.65rem 1rem;
        }

        .sliderContent__item h3 a {
            color: white;
            text-decoration: none;
        }

        .sliderContent__item img {
            display: block;
            width: 100%;
            aspect-ratio: 16/9;
        }

        .sliderComponent__btn {
            position: absolute;
            top: calc(55% - 42px);
            background: transparent;
            outline: none;
            border: none;
            z-index: 91;
        }

        .sliderComponent__btn--left, .sliderComponent__btn--right {
            color: #ffda34;
            font-size: 42px;
            text-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
            cursor: pointer;
        }

        .sliderComponent__btn--left:active, .sliderComponent__btn--right:active {
            transform: scale(0.85);
            transition: transform .5s linear;
        }


        .sliderComponent__btn--left {
            left: 0.5rem;

        }

        .sliderComponent__btn--right {
            left: unset;
            right: 0.5rem;
        }
    </style>
</b:push>

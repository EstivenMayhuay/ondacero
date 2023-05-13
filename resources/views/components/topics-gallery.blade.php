<div class="topicsContent">
    <div class="topics">
        @foreach ($topics as $topic)
        <a href="/noticias/categoria/{{$topic->alias}}" class="topics__item text-decoration-none rounded" title="{{$topic->nombre}}">
            <span class="text-dark" >{{$topic->nombre}}</span>
        </a>
        @endforeach
    </div>
</div>

<b:push>
    <style>
        .topics {
            display: grid;
            grid-template-columns: 1fr;
            gap: 1.5rem;
        }

        .topics__item {
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            width: 100%;
            height: 120px;
            /*background-color: #ffda34;*/
            background: rgb(64,64,64);
            background: linear-gradient(-135deg, rgba(64,64,64,0.8379726890756303) 15%, rgba(255,218,52,1) 38%);
            list-style: none;
        }

        @media screen and (min-width: 768px) {
            .topics {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media screen and (min-width: 960px) {}

        @media screen and (min-width: 1200px) {
            .topics {
                grid-template-columns: repeat(3, 1fr);
            }

            .topics__item:hover {
                transform: scale(1.05);
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.25);
                transition: transform 0.45s linear;
                cursor: pointer;
            }
        }
    </style>
</b:push>

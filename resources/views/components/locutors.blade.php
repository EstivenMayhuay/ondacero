<div class="locutorsContent">
    <ul class="locutors">
        @foreach ($locutors as $locutor)
            <li class="locutors__item d-flex flex-column align-items-center">
                <img src="https://ondacero.com.pe/images/locutores/{{$locutor->urlImageName}}" alt="{{$locutor->name}}" width="86" height="86" loading="lazy" class="rounded-circle shadow-md shadow-lg">
                <p class="mt-1">{{$locutor->name}}</p>
            </li>
        @endforeach
    </ul>
</div>

<b:push>
    <style>
        .locutors {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            justify-items: center;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .locutors__item {
            margin-bottom: 1rem;
        }

        @media screen and (min-width: 768px) {
            .locutors__item img {
                width: 100px;
                height: auto;
            }
        }

        @media screen and (min-width: 1200px) {
            .locutors {
                grid-template-columns: repeat(3, 1fr);
            }
        }
    </style>
</b:push>

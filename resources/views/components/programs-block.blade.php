@php
    use Carbon\Carbon;
@endphp

<div class="componentPrograms">
    <div class="programs d-flex flex-column align-items-center">
        @foreach ($programs as $program)
            <article class="programs__item">
                <div class="programs__image">
                    <img src="https://ondacero.com.pe/j/images/programacion/{{$program->urlPhoto}}" alt="{{$program->title}}" width="220" height="auto">
                </div>
                <div class="programs__info bg-dark text-center text-white p-3 fw-bold">
                    {{Carbon::parse($program->hora)->format('h:i A')}} a {{Carbon::parse($program->hora2)->format('h:i A')}}
                </div>
            </article>
        @endforeach
    </div>
</div>

<b:push>

    <style>

        .programs__item {
            width: calc(100% - 2rem);
            margin-block: 1rem;
        }

        .programs__image img  {
            display: block;
            width: 100%;
            height: auto;
        }

        @media screen and (min-width: 768px) {
            .programs__item {
                width: 460px;
            }
        }

        @media screen and (min-width: 1024px) {
            .programs__item {
                width: 560px;
            }
        }
    </style>

</b:push>

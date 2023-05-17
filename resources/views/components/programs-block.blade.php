<div class="componentPrograms">
    <div class="programs">
        @foreach ($programs as $program)
            <article class="programs__item">
                <div class="programs__image">
                    <img src="https://ondacero.com.pe/j/images/programacion/{{$program->urlPhoto}}" alt="{{$program->title}}" width="220" height="auto">
                </div>
            </article>
        @endforeach
    </div>
</div>

<b:push>

    <style>

    </style>

</b:push>

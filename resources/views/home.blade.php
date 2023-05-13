@extends('app')

@section('content')
    <section class="sliderSection">
        <x-slider :arrNews="$sliderNews" />
    </section>

    <section class="newsSection py-5 px-4">
        <h2 class="color-text-secondary mb-4 fs-3 text-font-bold title-underline">Las Últimas</h2>
        <x-gallery-newscd :news="$news" />
    </section>

    <section class="topicsSection py-5 px-4">
        <h2 class="color-text-secondary mb-4 fs-3 text-font-bold title-underline">Temas de Interés</h2>
       <x-topics-gallery :topics="$topics"/>
    </section>

    <section class="locutorsSection py-5 px-4">
        <h2 class="color-text-secondary mb-4 fs-3 text-font-bold title-underline">Locutores</h2>
        <x-locutors :locutors="$locutors" />
    </section>

    <section class="rankingMusicSection py-5 px-4">
        <h2 class="color-text-secondary mb-4 fs-3 text-font-bold title-underline">Ranking Onda Cero</h2>
    </section>
@endsection

@section('customScripts')
    <script src="{{ mix('js/slider.js') . '?v=' . rand(1,100) }}"></script>
@endsection

@extends('app')

@section('content')
    <section class="py-5 px-4">
        <h2 class="color-text-secondary mb-4 fs-3 text-font-bold">Semana Ranking: {{$musicRankings->week}}</h2>
        <x-ranking-gallery :arrMusics="$musicRankings->results" />
    </section>
@endsection

@section('customScripts')
    <script src="{{ mix('js/ranking.js') . '?v=' . rand(1,100) }}"></script>
@endsection


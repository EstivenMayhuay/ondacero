@extends('app')

@section('content')
    <section class="py-5 px-4">
        <x-ranking-gallery :arrMusics="$musicRankings" />
    </section>
@endsection

@section('customScripts')
@endsection


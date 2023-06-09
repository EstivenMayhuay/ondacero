@extends('app')

@section('content')
    <section class="py-5 px-4">
        <x-gallery-newscd :news="$news" :categories="$categories" :showFilter="true" :years="$years"/>
        <div class="d-flex my-4 justify-content-end paginator">
            {{ $news->links()}}
        </div>
        <div class="pagina  tion-wrapper">
        </div>
    </section>
@endsection

@section('customScripts')
<script src="{{ mix('js/news.js') . '?v=' . rand(1,100) }}"></script>
@endsection


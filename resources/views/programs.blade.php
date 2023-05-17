@extends('app')

@section('content')
    <section class="sectionPrograms py-5 px-4">
        <h3>{{$programs->day}}</h3>
        <x-programs-block :programs="$programs->results"/>
    </section>
@endsection

@extends('layouts.app')

@section('title-page', 'movies')
    
@section('main-content')
    <h1>TUTTI I FILM</h1>
    {{--VERRANNO INSERITI TUTTI I RECORD DELLA TABELLA MOVIES DEL laravel_model_controller (DB)--}}

    @foreach ($movies as $elem)
        <h2>{{ $elem->title }}</h2>
    @endforeach
@endsection
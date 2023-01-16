@extends('layouts.app')

@section('title-page', 'Movies')
    
@section('main-content')
    <h1 class="text-center pb-5">TUTTI I FILM</h1>
    {{--VERRANNO INSERITI TUTTI I RECORD DELLA TABELLA MOVIES DEL laravel_model_controller (DB)--}}

    <div class="container">
        <div class="row">
   
            @foreach ($movies as $elem)
                
                    <div class="card" style="width: 20rem;">
                        <div class="card-body">
                            <h5 class="card-title">Titolo: {{ $elem->title }}</h5>
                            <p class="card-text">Titolo originale: {{ $elem->original_title }}</p>
                            <p>{{ $elem->nationality }}</p>
                            <p>Data di uscita: {{ $elem->date }}</p>
                            <p>Voto: {{ $elem->vote }}</p>
                        </div>
                    </div>
                    
            @endforeach

        </div>
    </div>

@endsection
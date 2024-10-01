@extends('layouts.app')

@section('content')
    <div class="container py-3">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center text-white">Dettaglio Fumetto</h1>
                <a href="{{ route('comics.edit', ['comic' => $comic->id]) }}" class="btn btn-sm btn-warning">Modifica</a>
                <div class="py-3 text-center"><img class="img-fluid"  src="{{$comic->thumb}}" alt=""></div>
                <h3 class="text-center text-white">{{$comic->series}}</h3>
                <p class="text-center text-white">{{$comic->description}}</p>
            </div>
        </div>
    </div>
@endsection
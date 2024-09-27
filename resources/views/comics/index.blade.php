@extends('layouts.app')

@section('content')
    <div class="container py-3">
        <div class="row">
        @foreach($comics as $comic)
            <div class="col-12 col-md-4 col-lg-2">
                <div class="carta mt-3">
                    <img class="img-fluid" src="{{$comic->thumb}}" alt="">
                        <div class="corpo">
                            <div class="titolo">
                                <p class="testo">
                                    {{$comic->series}}
                                </p>
                                <a href="{{route('comics.show', ['comic' => $comic->id])}}" class="btn btn-primary">Show More</a>
                            </div>
                        </div>
                </div>
            </div>
        @endforeach 
        </div>
    </div>
@endsection
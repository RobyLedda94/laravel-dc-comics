@extends ('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{ route ('comics.store') }}" method="post">
                    @csrf 
                    <div class="row gy-2 my-3">
                        <div class="col-12 col-md-6">
                            <label class="control-label">Titolo</label>
                            <input type="text" name="title" id="" class="form-control" placeholder="Titolo" value="{{ $comic->title }}">
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="control-label">Immagine</label>
                            <input type="text" name="thumb" id="" class="form-control" placeholder="Immagine" value="{{ $comic->thumb }}">
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="control-label">Serie</label>
                            <input type="text" name="series" id="" class="form-control" placeholder="Serie" value="{{ $comic->series }}">
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="control-label">Prezzo</label>
                            <input type="text" name="price" id="" class="form-control" placeholder="Prezzo" value="{{ $comic->price }}">
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="control-label">Data</label>
                            <input type="text" name="sale_date" id="" class="form-control" placeholder="Data" value="{{ $comic->sale_date }}">
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="control-label">Descrizione</label>
                            <textarea type="text" name="description" id="" class="form-control" placeholder="Descrizione">{{ $comic->description }}"</textarea>
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="control-label">Tipologia</label>
                            <input type="text" name="type" id="" class="form-control" placeholder="Tipologia" value="{{ $comic->type }}">
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="control-label">Artisti</label>
                            <textarea type="text" name="artists" id="" class="form-control" placeholder="Artisti">{{ $comic->artists }}</textarea>
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="control-label">Scrittori</label>
                            <textarea type="text" name="writers" id="" class="form-control" placeholder="Scrittori">{{ $comic->writers }}</textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-sm btn-success">Salva</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
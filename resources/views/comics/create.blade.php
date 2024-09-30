@extends ('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="" method="post">
                    @csrf 
                    <div class="row gy-2 my-3">
                        <div class="col-12 col-md-6">
                            <label class="control-label">Titolo</label>
                            <input type="text" name="title" id="" class="form-control" placeholder="Title">
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="control-label">Immagine</label>
                            <input type="text" name="thumb" id="" class="form-control" placeholder="Immagine">
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="control-label">Serie</label>
                            <input type="text" name="series" id="" class="form-control" placeholder="Serie">
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="control-label">Prezzo</label>
                            <input type="text" name="price" id="" class="form-control" placeholder="Prezzo">
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="control-label">Descrizione</label>
                            <textarea type="text" name="description" id="" class="form-control" placeholder="Descrizione"></textarea>
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="control-label">Tipologia</label>
                            <input type="text" name="type" id="" class="form-control" placeholder="Tipologia">
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="control-label">Scrittori</label>
                            <textarea name="writers" id="" class="form-control" placeholder="Scrittori"></textarea>
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
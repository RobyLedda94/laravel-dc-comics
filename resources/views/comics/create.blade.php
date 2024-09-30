@extends ('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-white">prova form di aggiunta</h1>
                <form action="" method="post">
                    @csrf 
                </form>
            </div>
        </div>
    </div>

@endsection
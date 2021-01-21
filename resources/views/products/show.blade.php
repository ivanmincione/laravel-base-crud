@extends("layouts.app")

{{-- stampare scheda del singolo prodotto --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center ">
                <div class="card">
                    <img class="card-img-top" src="..." alt="Codice Prodotto {{ $product->id }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p>Prezzo: € {{ number_format($product->price, 2 , "," , ".") }}</p>
                        <p class="card-text">Descrizione: {{ $product->description }}</p>
                        <a href="#" class="btn btn-primary">Acquista</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

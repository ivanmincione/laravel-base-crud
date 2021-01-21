@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Inserisci nuovo prodotto</h1>
                <form method="POST" action="{{ route('products.store') }}">
                    @csrf
                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <textarea name="description" rows="8" cols="80" placeholder="Descrizione prodotto"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Prezzo</label>
                        <input type="number" name="price" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">
                            Salva prodotto
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

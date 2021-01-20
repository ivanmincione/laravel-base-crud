@extends("layouts.app")

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="uppercase text-center">i nostri prodotti</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th class="uppercase" scope="col">ID</th>
                            <th class="uppercase" scope="col">Nome</th>
                            <th class="uppercase" scope="col">Prezzo</th>
                            <th class="uppercase" scope="col">Descrizione</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>
                                    {{ $product->id }}
                                </td>
                                <td>
                                    {{ $product->name }}
                                </td>
                                <td>
                                    {{ $product->price }}
                                </td>
                                <td>
                                    {{ $product->description }}
                                </td>
                                <td>
                                    <a href="{{ route('products.show', ['product' => $product->id ]) }}"
                                        class="btn btn-primary">
                                        Info
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

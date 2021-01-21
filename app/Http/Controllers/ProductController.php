<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'products' => Product::all()
        ];
        return view('products.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //recupero i dati attraverso all() e li assegno a $data
        $data = $request->all();
        //creo una nuova istanza
        $product = new Product();
        $product->fill($data);
        // utilizzo il metodo fill() oppure le creo manualmente
        //$product->name = $data["name"];
        //$product->price = $data["price"];
        //$product->description = $data["description"];

        $product->save(); //salva i dati inseriti nel form

        //i dati si devono ridirezionare alla rotta dove si vogliono visualizzare
        return redirect()->route("products.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product) // passando ciò come parametri alla funzione show ottengo lo stesso risultato di ::find
    {
        // $product = Product::find($id); //quando il prarametro $id è uguale al id del prodotto...
        if($product) {
            $data = [
                'product' => $product
            ];
            return view('products.show', $data);
        } else {
            abort(404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

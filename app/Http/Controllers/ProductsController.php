<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\ProductResource;
use Illumnate\Http\Response;
use App\Http\Requests\ProductRequest;
class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Product $product)
    {  
        
        //Produtos deletados também serão mostrados
        $products = $product->withTrashed()->get();

        if ($products == "[]"){
            return response()->json([
                "mensagem" => "Não há produtos cadastrados na base de dados.",
                ]);
        }else {
            return $products;
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(ProductRequest $request){

        //Validação feita no request
        $product = new Product($request->all());
        
        if($product->save()){
            return response()->json([

                "mensagem" => "Produto criado.",
            ]);
        }else {
            return response(json([
                "mensagem" => "Não foi possível criar o produto.",
            ]));
        }
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $product = Product::find($id);

        if(isset($product)){
            return $product;
        }else {

            return response()->json([

                "mensagem" => "O produto de id $id não existe ou foi deletado.",
            ]);
        }
        

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $product = Product::find($id);

        if ($product){

            $product->name = $request->name;
            $product->category = $request->category;
            $product->status = $request->status;
            $product->quantity = $request->quantity;
    
    
            $product->save();
    
            return response()->json([
    
                "mensagem" => "O produto foi atualizado com sucesso.",
                "Produto:" => $product
            ]);


        }else {
            return response()->json([
    
                "mensagem" => "O produto de id $id não existe",
            ]);
        }

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        if($product){
            $product->delete();
            return response()->json([
    
                "mensagem" => "O produto de id $id foi deletado com sucesso.",
            ]);
        }else {
            return response()->json([
    
                "mensagem" => "Não existe um produto de id $id.",
            ]);
        }

        //Retorna informações do produto deletado, tal qual deleted_at
        return $product;
    }
}

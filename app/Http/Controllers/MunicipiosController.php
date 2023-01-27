<?php

namespace App\Http\Controllers;

use App\Http\Resources\MunicipioResource;
use App\Http\Resources\PostResource;
use App\Models\Municipio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use GuzzleHttp;
use App\Http\Requests\MunicipioRequest;

class MunicipiosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $municipio = Municipio::all();
        return $municipio;

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //Api IBGE
        $response = Http::get('http://servicodados.ibge.gov.br/api/v1/localidades/estados/33/municipios');
        $response = json_decode($response);


        //Dados da api armazenados em arrays
        for ($i = 0; $i < count ($response); $i++){
            $ids[] = $response[$i]->id;
            $names[] = $response[$i]->nome;
        }
        
        

        //Se os dados dos municípios estiverem vazios, serão criados
        if (Municipio::all() == "[]"){

            $municipio = Municipio::create($request->all());
    
            $municipio->ibge_name = $names;
            $municipio->ibge_id = $ids;

            $municipio->save();

            return response()->json([
    
                "mensagem" => "Municípios inseridos no banco de dados com sucesso",
                "municípios do rio de janeiro" => $municipio->ibge_name,
            ]);

        }else {
            $municipio = Municipio::all();
            $municipio->ibge_name = $names;

            return response()->json([
    
                "mensagem" => "Os dados requeridos já existem e não é possível duplicá-los",
                "municípios cadastrados" => $municipio->ibge_name,
            ]);
        }

        
    }
}

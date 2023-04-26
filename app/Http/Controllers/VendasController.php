<?php

namespace App\Http\Controllers;

use App\Http\Resources\VendasResource;
use App\Models\Vendas;

class VendasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function index()
    {
        return VendasResource::collection(auth()->user()->vendas);
    }

    public function vendasMes(Vendas $venda){
        return [
            "status" => true,
            "data" =>$venda
        ];
    }
}

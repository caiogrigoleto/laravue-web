<?php

namespace App\Http\Controllers;

use App\Http\Resources\VendasResource;
use App\Http\Requests\VendasStoreRequest;

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

    public function vendasMes(){
        return [
            "status" => true,
            "vendas" =>auth()->user()->vendas()->whereMonth('created_at', date('m'))->get()
        ];
    }

    public function show($id)
    {
        $venda = auth()->user()->vendas()->find($id);
        return [
            "status" => true,
            "venda" => $venda
        ];
    }

    public function store(VendasStoreRequest $request)
    {
        $input = $request->validated();

        $venda = auth()->user()->vendas()->create($input);

        return new VendasResource($venda);

    }
}

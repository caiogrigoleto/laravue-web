<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmpresasStoreRequest;
use App\Http\Requests\EmpresasUpdateRequest;
use App\Http\Resources\EmpresasResource;
use App\Models\Empresas;

class EmpresasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function index()
    {
        return EmpresasResource::collection(auth()->user()->empresas);
    }

    public function show($id)
    {
        $empresa = auth()->user()->empresas()->find($id);
        return [
            "status" => true,
            "empresa" => $empresa
        ];
    }
    
    public function store(EmpresasStoreRequest $request)
    {
        $input = $request->validated();

        $empresa = auth()->user()->empresas()->create($input);

        return new EmpresasResource($empresa);
    }

    public function update(Empresas $empresa, EmpresasUpdateRequest $request)
    {
        $input = $request->validated();

        $empresa->fill($input);
        $empresa->save();

        return new EmpresasResource($empresa->fresh());
    }

    public function destroy(Empresas $empresa)
    {
        $empresa->delete();

        return [
            'message' => 'Empresa Excluida com sucesso!',
        ];
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\VendasItensResource;

class VendasItensController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function index()
    {
        return VendasItensResource::collection(auth()->user()->vendasItens);
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Resources\GroupsResource;
use Illuminate\Http\Request;

class GroupsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function index()
    {
        return GroupsResource::collection(auth()->user()->groups);
    }

    public function store(){

    }

    public function update(){
        
    }

    public function destroy(){
        
    }
}

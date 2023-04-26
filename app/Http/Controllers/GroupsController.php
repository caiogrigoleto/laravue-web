<?php

namespace App\Http\Controllers;

use App\Http\Requests\GroupsStoreRequest;
use App\Http\Resources\GroupsResource;
use App\Models\Groups;

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

    public function store(GroupsStoreRequest $request){
        $input = $request->validated();

        $group = auth()->user()->groups()->create($input);

        return new GroupsResource($group);

    }

    public function update(Groups $groups , GroupsStoreRequest $request){
        $input = $request->validated();

        $groups->fill($input);
        $groups->save();

        return new GroupsResource($groups->fresh());
        
    }

    public function destroy(Groups $groups){
        $groups->delete();

        return [
            'message' => 'Group deleted successfully',
        ];
        
    }
}

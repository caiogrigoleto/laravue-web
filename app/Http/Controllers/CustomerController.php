<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerStoreRequest;
use Illuminate\Http\Request;
use App\Http\Resources\CustomerResource;
use App\Models\Customer;
use App\Http\Requests\CustomerUpdateRequest;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function index()
    {
        return CustomerResource::collection(auth()->user()->customer);
    }

    public function store(CustomerStoreRequest $request){
        $input = $request->validated();

        $customer = auth()->user()->customer()->create($input);

        return new CustomerResource($customer);
    }

    public function update(Customer $customer, CustomerUpdateRequest $request){
        $input = $request->validated();

        $customer->fill($input);
        $customer->save();

        return new CustomerResource($customer->fresh());
    }

    public function destroy(Customer $customer){
        $customer->delete();
    }
}

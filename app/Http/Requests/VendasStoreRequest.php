<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VendasStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //
            'customer_id' => 'required|exists:customers,id',
            'vr_total' => 'required|numeric',
            'user_id' => 'required|exists:users,id',
        ];
    }
}

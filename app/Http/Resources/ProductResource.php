<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'description' => $this->description,
            'quantity' => $this->quantity,
            'price' => $this->price,
            'category_id' => $this->category_id,
            'user_id' => $this->user_id,
            'created_at' => $this->created_at,
        ];
    }
}

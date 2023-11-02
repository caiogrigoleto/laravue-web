<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class VendasItensResource extends JsonResource
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
        'customer_id' => $this->customer_id,
        'venda_id' => $this->venda_id,
        'product_id' => $this->product_id,
        'quantidade' => $this->quantidade,
        'vr_unitario' => $this->vr_unitario,
        'vr_total' => $this->vr_total,
        'user_id' => $this->user_id,
        'created_at' => $this->created_at,
        'updated_at' => $this->updated_at
        ];
    }
}

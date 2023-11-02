<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EmpresasResource extends JsonResource
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
            'cnpj' => $this->cnpj,
            'email' => $this->email,
            'nomeEmpresa' => $this->nomeEmpresa,
            'codEmpresa' => $this->codEmpresa,
            'codLoja' => $this->codLoja,
            'flagAtivo' => $this->flagAtivo,
            'vencTrial' => $this->vencTrial,
            'dataContratacao' => $this->dataContratacao,
            'dataCadastro' => $this->dataCadastro
        ];
    }
}

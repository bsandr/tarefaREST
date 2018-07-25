<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Parceiro extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'nome'=> $this->nome,
            'email'=> $this->email,
            'capital' => $this->capital,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}

<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EmitentiCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'                                    =>$this->id,
            'denumire'                              =>$this->denumire,
            'data_incepere_activitate'              =>$this->data_incepere_activitate,
            'data_sfarsit_activitate'               =>$this->data_sfarsit_activitate,
            'stare'                                 =>$this->stare,
            'numar_acte'                            =>count($this->getActe)
        ];
    }
}

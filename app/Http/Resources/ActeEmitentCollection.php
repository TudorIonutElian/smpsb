<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ActeEmitentCollection extends JsonResource
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
            'id'                    =>$this->id,
            'titulatura'            =>$this->titulatura,
            'data_legiferare'       =>$this->data_legiferare
        ];
    }
}

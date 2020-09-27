<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ActeCollection extends JsonResource
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
            'id'                    => $this->id,
            'titulatura'            => $this->titulatura,
            'emitent'               => $this->getEmitent->denumire,
            'data_legiferare'       => $this->data_legiferare,
            'data_abrogare'         => $this->data_abrogare ? $this->data_abrogare : 'Act in vigoare'
        ];
    }
}

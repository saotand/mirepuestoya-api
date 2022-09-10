<?php

namespace App\Http\Resources\API;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str;

class CarBrandResourceSelect extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        //Default Definition
        //return parent::toArray($request);

        // Select structure
        return [
            'value'=>$this->id,
            'text'=>Str::of($this->name)->upper()
        ];

    }
}
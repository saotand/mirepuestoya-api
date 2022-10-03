<?php

namespace App\Http\Resources\API;

use Illuminate\Http\Resources\Json\JsonResource;
// use Illuminate\Support\Str;

class CarBrandResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // Defaul Assign
        // return parent::toArray($request);

        $resourceHolder =  [
            'name'=>$this->name,
            'description' => $this->description,
            'counter'=> $this->counter,
            'meta'=>[
                'active'=> $this->active,
            ]
        ];
        if($this->created_at){
            $resourceHolder['meta']['created'] = $this->created_at;
        }
        if($this->updated_at){
            $resourceHolder['meta']['created'] = $this->updated_at;
        }
        if($this->image){
            $resourceHolder['meta']['image'] = $this->image;
        }
        return $resourceHolder;
    }
}
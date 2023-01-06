<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'name' => $this->name,
            'nameID'=>$this->nameID,
            'lastname' =>  $this->lastname,
            'phone' => $this->phone,
            'person' => $this->person,
            'day' => $this->day,
            'month' => $this->month,
            'year' => $this->year,
            'city' => $this->city,
        ];
    }
}

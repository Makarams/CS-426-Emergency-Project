<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CrimeResource extends JsonResource
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
            'id' => (string)$this->id,
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'crime_type' => $this->crime_type,
            'description' => $this->description,
            'witness' => $this->witness,
            'urgency' => $this->urgency,
            'isSolve' => $this->isSolve
        ];
    }
}
<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LostAndFoundResource extends JsonResource
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
            'property_type' => $this->property_type,
            'description' => $this->description,
            'location' => $this->location,
            'date' => $this->date,
            'contact_owner' => $this->contact_owner,
            'consent' => $this->consent,
            'isSolve' => $this->isSolve
        ];
    }
}
<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DepartmentResource extends JsonResource
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
            'department_name' => $this->department_name,
            'department_specialty' => $this->department_specialty,
            'department_type' => $this->department_type,
            'legend_symbol' => $this->legend_symbol,
            'phone_number' => $this->phone_number,
            'location_id' => $this->location_id,
            'personal' => PersonalResource::collection($this->whenLoaded('personal')),
            'location' => new LocationResource($this->whenLoaded('location')),
        ];
    }
}
<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class IncidentResource extends JsonResource
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
            'photo' => $this->photo,
            'reporter_name' => $this->reporter_name,
            'reporter_contact' => $this->reporter_contact,
            'incident_location' => $this->incident_location,
            'incident_description' => $this->incident_description,
            'emergency_assistance' => $this->emergency_assistance,
            'contact_reporter' => $this->contact_reporter,
            'consent' => $this->consent,
            'isSolve' => $this->isSolve
        ];
    }
}
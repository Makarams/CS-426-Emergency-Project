<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FraudResource extends JsonResource
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
            'consent' => $this->consent,
            'location' => $this->location,
            'evidence' => $this->evidence,
            'fraud_type' => $this->fraud_type,
            'description' => $this->description,
            'report_anonymously' => $this->report_anonymously,
            'emergency_services_contacted' => $this->emergency_services_contacted,
            'isSolve' => $this->isSolve
        ];
    }
}
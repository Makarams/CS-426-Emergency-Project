<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PersonalResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $data = [
            'id' => (string)$this->id,
            'account_id' => (string)$this->account_id,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'date_of_birth' =>  $this->date_of_birth,
            'occupation' => $this->occupation,
            'position' => $this->position,
            'phone_number' => $this->phone_number,
            'email' => $this->email,
            'department_id' => $this->department_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
        
         // Include relationship data if it exists
         if ($this->user) {
            $data['user'] = new UserResource($this->user);
        }

        // Include department relationship if it exists
        if ($this->department) {
            $data['department'] = new DepartmentResource($this->department);
        }

        return $data;
    }

    public function user(){
        return $this->belongsTo(User::class, 'account_id', 'id');
    }
}

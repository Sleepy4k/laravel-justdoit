<?php

namespace App\Http\Transformer\Auth;

use Illuminate\Http\Resources\Json\JsonResource;

class LogoutResource extends JsonResource
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
            'user_id' => $this->id,
            'company_id' => $this->company,
            'username' => $this->username,
            'whatsapp' => $this->whatsapp_number,
            'created_at' => $this->created_at->format('d-m-Y')
        ];
    }
}
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ContactResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     *
     * @return array
     */
    public function toArray($request): array
    {
        return [
            'pageTitle' => $this->page_title,
            'description' => $this->description,
            'phoneNo' => $this->phone,
            'email' => $this->email,
            'address' => $this->address
        ];
    }

    public function with($request)
    {
        return [
            'status' => $this->status,
        ];
    }
}

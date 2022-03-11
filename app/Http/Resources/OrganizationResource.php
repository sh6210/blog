<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrganizationResource extends JsonResource
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
            'id' => $this->id,
            'name' => $this->name,
            'isAtHome' => $this->is_at_home,
            'urlToLogo' => $this->logo,
            'excerpt' => $this->excerpt,
            'description' => $this->description,
            'email' => $this->email,
            'website' => $this->website,
            'social' => $this->social,
        ];
    }

    public function with($request)
    {
        return [
            'status' => $this->status
        ];
    }
}

<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GeneralInfoResource extends JsonResource
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
            'name' => $this->name,
            'urlToLogo' => $this->site_logo,
            'urlToProfilePhoto' => $this->profile_photo_url,
            'social' => $this->social,
        ];
    }

    public function with($request): array
    {
        return [
            'status' => $this->status
        ];
    }
}

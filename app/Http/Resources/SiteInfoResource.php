<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SiteInfoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     *
     * @return array
     */
    public function toArray($request): array
    {
        return [
            'title' => $this->title,
            'description' => $this->description,
            'author' => $this->author,
            'keywords' => $this->keywords,
            'favicon' => $this->favicon,
            'themeColor' => $this->theme,
        ];
    }

    public function with($request): array
    {
        return [
            'status' => $this->status
        ];
    }
}

<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BannerResource extends JsonResource
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
            'title' => $this->title,
            'subTitle' => $this->sub_title,
            'text' => $this->text,
            'description' => $this->description,
            'urlToImage' => $this->image,
        ];
    }

    public function with($request): array
    {
        return [
            'status' => $this->status,
        ];
    }
}

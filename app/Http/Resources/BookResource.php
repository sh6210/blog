<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
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
            'status' => $this->status,
            'name' => $this->name,
            'url' => $this->url,
            'isAtHome' => $this->is_at_home,
            'coverImage' => $this->cover_image,
            'writer' => optional($this->writer)->name,
            'editor' => optional($this->editor)->name,
            'publisher' => optional($this->publisher)->name,
            'excerpt' => $this->excerpt,
            'description' => $this->description,
            'createdAt' => $this->created_at,
            'updatedAt' => $this->updated_at,
            'publishedAt' => $this->published_at,
            'links' => [
                'download' => $this->download_link,
                'read' => $this->read_link,
                'buy' => $this->buy_link
            ]
        ];
    }

    public function with($request)
    {
        return [
            'status' => $this->status,
        ];
    }
}

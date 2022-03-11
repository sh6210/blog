<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SliderResource extends JsonResource
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
            'type' => $this->type,
            'id' => $this->id,
            'title' => $this->title,
            'url' => $this->url,
            'slug' => $this->slug,
            'featuredImage' => $this->featured_image,
            'is_at_home' => $this->is_at_home,
            'is_at_slider' => $this->is_at_slider,
            'excerpt' => $this->excerpt,
            'content' => $this->content,
            'createdAt' => $this->created_at,
            'publishedAt' => $this->published_t,
            'updatedAt' => $this->updated_at,
            'status' => $this->status,
            'author' => $this->author,
            'allowComments' => $this->allow_comment,
            'category' => $this->category,
        ];
    }
}

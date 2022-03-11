<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CommentResource extends JsonResource
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
            'postId' => $this->post,
            'parentId' => $this->parent_comment,
            'content' => $this->content,
            'date' => $this->created_at,
            'dateGmt' => $this->date_gmt,
            'link' => $this->link,
            'status' => $this->status,
            'author' => $this->creator
        ];
    }

    public function with($request)
    {
        return [
            'status' => $this->status
        ];
    }
}

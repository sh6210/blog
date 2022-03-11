<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AboutResource extends JsonResource
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
            'pageTitle' => $this->page_title,
            'summary' => $this->summary,
            'urlToBannerImage' => $this->image,
            'text' => $this->content,
            'story' => [
                'title' => $this->story_title,
                'content' => $this->story_content,
            ],
            'education' => [
                'title' => $this->education_title,
                'content' => $this->education_content,
            ],
            'research' => [
                'title' => $this->research_title,
                'content' => $this->research_content
            ],
            'experience' => [
                'title' => $this->experience_title,
                'content' => $this->experience_content,
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

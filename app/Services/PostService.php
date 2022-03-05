<?php

namespace App\Services;

use App\Repositories\PostRepository;

class PostService
{
    private PostRepository $repo;

    public function __construct(PostRepository $repo)
    {
        $this->repo = $repo;
    }

    public function store(array $validated)
    {
        if (isset($validated['featured_image'])) {
            $validated['featured_image'] = $validated['featured_image']->store(POST_IMAGE_PATH);
        }

        $this->repo->store($validated);
    }
}

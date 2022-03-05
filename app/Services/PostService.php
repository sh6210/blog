<?php

namespace App\Services;

use App\Models\Post;
use App\Repositories\PostRepository;
use App\Traits\CommonServiceElements;
use Illuminate\Support\Facades\Storage;

class PostService
{
    use CommonServiceElements;

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

    public function update(Post $post, array $validated)
    {
        if (isset($validated['featured_image'])) {
            $validated['featured_image'] = $validated['featured_image']->store(POST_IMAGE_PATH);
            if ($post->featured_image) unlink(Storage::path($post->featured_image));
        }

        $this->repo->update($post, $validated);
    }

    public function destroy(Post $post)
    {
        if ($post->featured_image) unlink(Storage::path($post->featured_image));
        $post->delete();
    }
}

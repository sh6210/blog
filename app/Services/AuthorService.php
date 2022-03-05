<?php

namespace App\Services;

use App\Models\Author;
use App\Repositories\AuthorRepository;
use App\Traits\CommonServiceElements;
use Illuminate\Support\Facades\Storage;

class AuthorService
{
    use CommonServiceElements;

    private AuthorRepository $repo;

    public function __construct(AuthorRepository $repo)
    {
        $this->repo = $repo;
    }

    public function store(array $validated)
    {
        if (isset($validated['image'])) {
            $validated['image'] = $validated['image']->store(AUTHOR_IMAGE_PATH);
        }

        $this->repo->store($validated);
    }

    public function update(Author $author, array $validated)
    {
        if (isset($validated['image'])) {
            $validated['image'] = $validated['image']->store(AUTHOR_IMAGE_PATH);
            unlink(Storage::path($author->image));
        }

        $this->repo->update($author, $validated);
    }

    public function destroy(Author $author)
    {
        unlink(Storage::path($author->image));
        $author->delete();
    }
}

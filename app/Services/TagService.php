<?php

namespace App\Services;

use App\Repositories\TagRepository;
use App\Traits\CommonServiceElements;

class TagService
{
    use CommonServiceElements;

    private TagRepository $repo;

    public function __construct(TagRepository $repo)
    {
        $this->repo = $repo;
    }
}

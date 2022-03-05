<?php

namespace App\Services;

use App\Repositories\CategoryRepository;
use App\Traits\CommonServiceElements;

class CategoryService
{
    use CommonServiceElements;

    private CategoryRepository $repo;

    public function __construct(CategoryRepository $repo)
    {
        $this->repo = $repo;
    }
}

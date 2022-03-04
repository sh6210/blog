<?php

namespace App\Services;

use App\Repositories\CategoryRepository;

class CategoryService
{
    private CategoryRepository $repo;

    public function __construct(CategoryRepository $repo)
    {
        $this->repo = $repo;
    }

    public function getListData($perPage = false, $search = false)
    {
        $perPage = $perPage ?: dataPerPage();
        return $this->repo->getListData($perPage, $search);
    }
}

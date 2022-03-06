<?php

namespace App\Services;

use App\Repositories\BookRepository;
use App\Traits\CommonServiceElements;

class BookService
{
    use CommonServiceElements;

    private BookRepository $repo;

    /**
     * @param BookRepository $repo
     */
    public function __construct(BookRepository $repo)
    {
        $this->repo = $repo;
    }
}

<?php

namespace App\Repositories;

use App\Interfaces\ListData;
use App\Models\Book;
use App\Traits\OnlyStore;
use App\Traits\OnlyUpdate;
use Illuminate\Support\Facades\DB;

class BookRepository implements ListData
{
    use OnlyStore, OnlyUpdate;

    private string $model = Book::class;

    public function getListData($perPage, $search)
    {
        return $this->model::with('writer', 'editors')->latest()->paginate($perPage);
    }
}

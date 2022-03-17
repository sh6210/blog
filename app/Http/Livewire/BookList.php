<?php

namespace App\Http\Livewire;

use App\Http\Livewire\Traits\CommonListElements;
use App\Services\BookService;
use App\Services\CategoryService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class BookList extends Component
{
    use WithPagination, CommonListElements;

    private BookService $service;

    /**
     * @param BookService $service
     */
    public function boot(BookService $service)
    {
        $this->service = $service;
    }

    public function render()
    {
        $data = [
            'records' => $this->service->getListData($this->perPage, $this->search),
        ];

        return view('livewire.book-list', $data);
    }
}

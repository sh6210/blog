<?php

namespace App\Http\Livewire;

use App\Http\Livewire\Traits\CommonListElements;
use App\Services\BookService;
use Livewire\Component;

class BookList extends Component
{
    use CommonListElements;

    private BookService $service;

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

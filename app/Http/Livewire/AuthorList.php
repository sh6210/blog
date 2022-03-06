<?php

namespace App\Http\Livewire;

use App\Http\Livewire\Traits\CommonListElements;
use App\Services\AuthorService;
use App\Services\CategoryService;
use Livewire\Component;
use Livewire\WithPagination;

class AuthorList extends Component
{
    use WithPagination, CommonListElements;

    private AuthorService $service;

    /**
     * @param AuthorService $service
     */
    public function boot(AuthorService $service)
    {
        $this->service = $service;
    }

    public function render()
    {
        $data = [
            'records' => $this->service->getListData($this->perPage, $this->search),
        ];

        return view('livewire.author-list', $data);
    }
}

<?php

namespace App\Http\Livewire;

use App\Http\Livewire\Traits\CommonListElements;
use App\Services\CategoryService;
use Livewire\Component;
use Livewire\WithPagination;

class CategoryList extends Component
{
    use WithPagination, CommonListElements;

    private CategoryService $service;

    /**
     * @param CategoryService $service
     */
    public function boot(CategoryService $service)
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

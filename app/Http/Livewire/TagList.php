<?php

namespace App\Http\Livewire;

use App\Http\Livewire\Traits\CommonListElements;
use App\Services\TagService;
use Livewire\Component;
use Livewire\WithPagination;

class TagList extends Component
{
    use WithPagination, CommonListElements;

    private TagService $service;

    /**
     * @param TagService $service
     */
    public function boot(TagService $service)
    {
        $this->service = $service;
    }

    public function render()
    {
        $data = [
            'records' => $this->service->getListData(),
        ];

        return view('livewire.tag-list', $data);
    }
}

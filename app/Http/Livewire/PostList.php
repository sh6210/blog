<?php

namespace App\Http\Livewire;

use App\Http\Livewire\Traits\CommonListElements;
use App\Services\PostService;
use Livewire\Component;
use Livewire\WithPagination;

class PostList extends Component
{
    use WithPagination, CommonListElements;

    private PostService $service;

    /**
     * @param PostService $service
     */
    public function boot(PostService $service)
    {
        $this->service = $service;
    }

    public function render()
    {
        $data = [
            'records' => $this->service->getListData(),
        ];

        return view('livewire.post-list', $data);
    }
}

<?php

namespace App\Http\Livewire;

use App\Http\Livewire\Traits\CommonListElements;
use App\Services\CommentService;
use Livewire\Component;
use Livewire\WithPagination;

class CommentList extends Component
{
    use WithPagination, CommonListElements;

    private CommentService $service;

    /**
     * @param CommentService $service
     *
     * @return void
     */
    public function boot(CommentService $service)
    {
        $this->service = $service;
    }

    public function render()
    {
        $data = [
            'records' => $this->service->getListData()
        ];

        return view('livewire.comment-list', $data);
    }
}

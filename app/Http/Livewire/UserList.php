<?php

namespace App\Http\Livewire;

use App\Http\Livewire\Traits\CommonListElements;
use App\Services\UserService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class UserList extends Component
{
    use WithPagination, CommonListElements;

    private UserService $service;

    /**
     * @param UserService $service
     */
    public function boot(UserService $service)
    {
        $this->service = $service;
    }

    public function render(): Factory|View|Application
    {
//        dd($this->service->getListData($this->perPage, $this->search));
        $data = [
            'records' => $this->service->getListData($this->perPage, $this->search)
        ];

        return view('livewire.user-list', $data);
    }
}

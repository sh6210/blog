<?php

namespace App\Http\Livewire;

use App\Http\Livewire\Traits\CommonListElements;
use App\Services\RoleService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class RoleList extends Component
{
    use WithPagination, CommonListElements;

    private RoleService $service;

    public function boot(RoleService $service)
    {
        $this->service = $service;
    }

    public function render(): Factory|View|Application
    {
        $data = [
            'records' => $this->service->getListData($this->perPage, $this->search)
        ];

        return view('livewire.role-list', $data);
    }
}

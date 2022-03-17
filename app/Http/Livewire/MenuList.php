<?php

namespace App\Http\Livewire;

use App\Http\Livewire\Traits\CommonListElements;
use App\Services\MenuService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class MenuList extends Component
{
    use WithPagination, CommonListElements;

    private MenuService $service;

    /**
     * @param MenuService $service
     *
     * @return void
     */
    public function boot(MenuService $service)
    {
        $this->service = $service;
    }

    public function render(): Factory|View|Application
    {
        $data = [
            'records' => $this->service->getListData($this->perPage, $this->search)
        ];
        return view('livewire.menu-list', $data);
    }
}

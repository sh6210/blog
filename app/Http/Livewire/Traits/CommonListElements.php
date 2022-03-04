<?php

namespace App\Http\Livewire\Traits;

trait CommonListElements
{
    protected string $paginationTheme = 'bootstrap';

    public string $search = '';
    public int $perPage = DATA_PER_PAGE;

    public function updatingSearch()
    {
        $this->resetPage();
    }
}

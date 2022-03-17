<?php

namespace App\Services;

use App\Models\Menu;
use App\Repositories\MenuRepository;
use App\Traits\CommonServiceElements;
use Illuminate\Support\Facades\Storage;

class MenuService
{
    use CommonServiceElements;

    private MenuRepository $repo;

    public function __construct(MenuRepository $repo)
    {
        $this->repo = $repo;
    }

    public function store(array $validated)
    {
        if (isset($validated['icon'])) {
            $validated['icon'] = $validated['icon']->store(MENU_ICON_PATH);
        }

        $this->repo->store($validated);
    }

    public function update(Menu $menu, array $validated)
    {
        if (isset($validated['icon'])) {
            $validated['icon'] = $validated['icon']->store(MENU_ICON_PATH);
            unlink(Storage::path($menu->icon));
        }

        $this->repo->update($menu, $validated);
    }
}

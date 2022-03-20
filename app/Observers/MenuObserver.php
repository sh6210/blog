<?php

namespace App\Observers;

use App\Models\Menu;

class MenuObserver
{
    /**
     * Handle the Menu "created" event.
     *
     * @param Menu $menu
     *
     * @return void
     */
    public function created(Menu $menu)
    {
        $menu->slug = createSlugFrom($menu->title);
        $menu->saveQuietly();
    }

    /**
     * Handle the Menu "updated" event.
     *
     * @param Menu $menu
     *
     * @return void
     */
    public function updated(Menu $menu)
    {
        $menu->slug = createSlugFrom($menu->title);
        $menu->saveQuietly();
    }

    /**
     * Handle the Menu "deleted" event.
     *
     * @param Menu  $menu
     *
     * @return void
     */
    public function deleted(Menu $menu)
    {
        //
    }

    /**
     * Handle the Menu "restored" event.
     *
     * @param  Menu  $menu
     *
     * @return void
     */
    public function restored(Menu $menu)
    {
        //
    }

    /**
     * Handle the Menu "force deleted" event.
     *
     * @param  Menu  $menu
     *
     * @return void
     */
    public function forceDeleted(Menu $menu)
    {
        //
    }
}

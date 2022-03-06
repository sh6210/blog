<?php

namespace App\Observers;

use App\Models\Tag;

class TagObserver
{
    /**
     * Handle the Tag "created" event.
     *
     * @param Tag $tag
     *
     * @return void
     */
    public function created(Tag $tag)
    {
        $tag->slug = createSlugFrom($tag->name);
        $tag->saveQuietly();
    }

    /**
     * Handle the Tag "updated" event.
     *
     * @param Tag $tag
     *
     * @return void
     */
    public function updated(Tag $tag)
    {
        //
    }

    /**
     * Handle the Tag "deleted" event.
     *
     * @param  Tag  $tag
     *
     * @return void
     */
    public function deleted(Tag $tag)
    {
        //
    }

    /**
     * Handle the Tag "restored" event.
     *
     * @param  Tag  $tag
     *
     * @return void
     */
    public function restored(Tag $tag)
    {
        //
    }

    /**
     * Handle the Tag "force deleted" event.
     *
     * @param  Tag  $tag
     *
     * @return void
     */
    public function forceDeleted(Tag $tag)
    {
        //
    }
}

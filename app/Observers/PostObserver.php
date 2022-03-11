<?php

namespace App\Observers;

use App\Models\Post;
use Illuminate\Support\Str;

class PostObserver
{
    /**
     * Handle the Post "created" event.
     *
     * @param Post $post
     *
     * @return void
     */
    public function created(Post $post)
    {
        $post->slug = createSlugFrom($post->title);
        $post->excerpt = createExcerpt($post->content);
        $post->saveQuietly();
    }

    /**
     * Handle the Post "updated" event.
     *
     * @param Post $post
     *
     * @return void
     */
    public function updated(Post $post)
    {
        $post->slug = createSlugFrom($post->title);
        $post->excerpt = createExcerpt($post->content);
        $post->saveQuietly();
    }

    /**
     * Handle the Post "deleted" event.
     *
     * @param Post  $post
     *
     * @return void
     */
    public function deleted(Post $post)
    {
        //
    }

    /**
     * Handle the Post "restored" event.
     *
     * @param  Post  $post
     *
     * @return void
     */
    public function restored(Post $post)
    {
        //
    }

    /**
     * Handle the Post "force deleted" event.
     *
     * @param  Post  $post
     *
     * @return void
     */
    public function forceDeleted(Post $post)
    {
        //
    }
}

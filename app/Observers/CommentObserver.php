<?php

namespace App\Observers;

use App\Models\Comment;

class CommentObserver
{
    /**
     * Handle the Comment "created" event.
     *
     * @param Comment $comment
     *
     * @return void
     */
    public function created(Comment $comment)
    {
        $comment->date_gmt = now();
        $comment->commented_by = auth()->id();
        $comment->saveQuietly();
    }

    /**
     * Handle the Comment "updated" event.
     *
     * @param Comment $comment
     *
     * @return void
     */
    public function updated(Comment $comment)
    {
        //
    }

    /**
     * Handle the Comment "deleted" event.
     *
     * @param Comment  $comment
     *
     * @return void
     */
    public function deleted(Comment $comment)
    {
        //
    }

    /**
     * Handle the Comment "restored" event.
     *
     * @param  Comment  $comment
     *
     * @return void
     */
    public function restored(Comment $comment)
    {
        //
    }

    /**
     * Handle the Comment "force deleted" event.
     *
     * @param  Comment  $comment
     *
     * @return void
     */
    public function forceDeleted(Comment $comment)
    {
        //
    }
}

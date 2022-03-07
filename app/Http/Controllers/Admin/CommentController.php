<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommentRequest;
use App\Models\Comment;
use App\Services\CommentService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Session;

class CommentController extends Controller
{
    private CommentService $service;

    public function __construct(CommentService $service)
    {
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('admin.comment.index');
    }

    /**
     * Display the specified resource.
     *
     * @param Comment $comment
     *
     * @return Response
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Comment  $comment
     *
     * @return Application|Factory|View
     */
    public function edit(Comment $comment)
    {
        $data = [
            'record' => $comment
        ];

        return view('admin.comment.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CommentRequest $request
     * @param Comment $comment
     *
     * @return RedirectResponse
     */
    public function update(CommentRequest $request, Comment $comment): RedirectResponse
    {
        $this->service->update($comment, $request->validated());

        Session::flash('success');

        return redirect()->route('comment.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Comment  $comment
     *
     * @return RedirectResponse
     */
    public function destroy(Comment $comment): RedirectResponse
    {
        if ($childCommentsCount = $comment->childComments()->count()) {
            Session::flash('error', "Sorry selected category has direct $childCommentsCount child comments");
        } else {
            $comment->delete();
            Session::flash('success');
        }

        $comment->delete();
        Session::flash('success');
        return redirect()->route('comment.index');
    }
}

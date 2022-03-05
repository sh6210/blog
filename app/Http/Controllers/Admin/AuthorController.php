<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthorRequest;
use App\Models\Author;
use App\Services\AuthorService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Session;

class AuthorController extends Controller
{
    private AuthorService $service;

    public function __construct(AuthorService $service)
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
        return view('admin.author.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view("admin.author.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param AuthorRequest $request
     *
     * @return RedirectResponse
     */
    public function store(AuthorRequest $request): RedirectResponse
    {
        $this->service->store($request->validated());

        Session::flash('success');

        return redirect()->route('author.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Author $author
     *
     * @return Application|Factory|View
     */
    public function edit(Author $author)
    {
        $data = [
            'record' => $author
        ];

        return view('admin.author.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param AuthorRequest $request
     * @param Author $author
     *
     * @return RedirectResponse
     */
    public function update(AuthorRequest $request, Author $author): RedirectResponse
    {
        $this->service->update($author, $request->validated());

        Session::flash('success');

        return redirect()->route('author.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Author $author
     *
     * @return RedirectResponse
     */
    public function destroy(Author $author): RedirectResponse
    {
        $this->service->destroy($author);

        Session::flash('success');

        return redirect()->route('author.index');
    }
}

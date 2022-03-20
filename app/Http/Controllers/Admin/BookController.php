<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BookRequest;
use App\Models\Book;
use App\Models\Editor;
use App\Models\Publisher;
use App\Models\Writer;
use App\Services\BookService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Session;

class BookController extends Controller
{
    private BookService $service;

    /**
     * @param BookService $service
     */
    public function __construct(BookService $service)
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
        return view('admin.book.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create(): View|Factory|Application
    {
        $data = [
            'writers' => Writer::all(),
            'editors' => Editor::all(),
            'publishers' => Publisher::all(),
        ];
        return view('admin.book.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param BookRequest $request
     *
     * @return RedirectResponse
     */
    public function store(BookRequest $request): RedirectResponse
    {
        $this->service->store($request->validated());

        Session::flash('success');

        return redirect()->route('book.index');
    }

    /**
     * Display the specified resource.
     *
     * @param Book $book
     *
     * @return Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Book $book
     *
     * @return Application|Factory|View
     */
    public function edit(Book $book): View|Factory|Application
    {
        $data = [
            'writers' => Writer::all(),
            'editors' => Editor::all(),
            'publishers' => Publisher::all(),
            'record' => Book::with('writer', 'editors', 'publisher')->whereId($book->id)->first(),
        ];
        return view('admin.book.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param BookRequest $request
     * @param Book $book
     *
     * @return RedirectResponse
     */
    public function update(BookRequest $request, Book $book): RedirectResponse
    {
        $this->service->update($book, $request->validated());

        Session::flash('success');

        return redirect()->route('book.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Book  $book
     *
     * @return RedirectResponse
     */
    public function destroy(Book $book): RedirectResponse
    {
        $this->service->destroy($book);

        Session::flash('success');

        return redirect()->route('book.index');
    }
}

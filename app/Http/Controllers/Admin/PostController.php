<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Repositories\AuthorRepository;
use App\Repositories\CategoryRepository;
use App\Repositories\PostRepository;
use App\Services\PostService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    private PostService $service;
    private CategoryRepository $categoryRepo;
    private AuthorRepository $authorRepo;
    private PostRepository $repo;

    public function __construct(
        PostService $service,
        PostRepository $repo,
        CategoryRepository $categoryRepository,
        AuthorRepository $authorRepository
    )
    {
        $this->service = $service;
        $this->categoryRepo = $categoryRepository;
        $this->authorRepo = $authorRepository;
        $this->repo = $repo;
    }

    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
        return view('admin.category.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        $data = [
            'categories' => $this->categoryRepo->getCategories(['id', 'name']),
            'authors' => $this->authorRepo->getAuthors(['id', 'name']),
            'types' => $this->repo->getTypes(),
        ];

        return view('admin.post.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param PostRequest $request
     *
     * @return RedirectResponse
     */
    public function store(PostRequest $request): RedirectResponse
    {
        $this->service->store($request->validated());

        Session::flash('success');

        return redirect()->route('post.index');
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
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     *
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}

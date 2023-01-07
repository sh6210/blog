<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Repositories\CategoryRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    private CategoryRepository $repo;

    public function __construct(CategoryRepository $repo)
    {
        $this->repo = $repo;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
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
            'categories' => $this->repo->getCategories(['id', 'name'])
        ];

        return view('admin.category.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CategoryRequest $request
     *
     * @return RedirectResponse
     */
    public function store(CategoryRequest $request): RedirectResponse
    {
        $this->repo->store($request->validated());

        Session::flash('success');

        return redirect()->route('category.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Category $category
     *
     * @return Application|Factory|View
     */
    public function edit(Category $category)
    {
        $data = [
            'categories' => $this->repo->getCategories(['id', 'name'], [$category->id]),
            'record' => $category
        ];

        return view('admin.category.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CategoryRequest $request
     * @param Category $category
     *
     * @return RedirectResponse
     */
    public function update(CategoryRequest $request, Category $category): RedirectResponse
    {
        $this->repo->update($category, $request->validated());

        Session::flash('success');

        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Category $category
     *
     * @return RedirectResponse
     */
    public function destroy(Category $category): RedirectResponse
    {
        if ($childCategoriesCount = $category->chileCategory()->count()) {
            Session::flash('error', "Sorry selected category has direct $childCategoriesCount child categories");
        } else {
            $category->delete();
            Session::flash('success');
        }

        return redirect()->route('category.index');
    }
}

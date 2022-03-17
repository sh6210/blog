<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MenuRequest;
use App\Models\Menu;
use App\Services\MenuService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    private MenuService $service;

    public function __construct(MenuService $service)
    {
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(): View|Factory|Application
    {
        return view('admin.menu.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create(): View|Factory|Application
    {
        $data = [
            'menus' => Menu::all(),
        ];
        return view('admin.menu.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param MenuRequest $request
     *
     * @return RedirectResponse
     */
    public function store(MenuRequest $request): RedirectResponse
    {
        $this->service->store($request->validated());

        Session::flash('success');

        return redirect()->route('menu.index');
    }

    /**
     * Display the specified resource.
     *
     * @param Menu $menu
     *
     * @return Response
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Menu $menu
     *
     * @return Application|Factory|View
     */
    public function edit(Menu $menu): View|Factory|Application
    {
        $data = [
            'menus' => Menu::where('id', '!=', $menu->id)->get(),
            'record' => $menu,
        ];
        return view('admin.menu.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  MenuRequest  $request
     * @param  Menu  $menu
     *
     * @return RedirectResponse
     */
    public function update(MenuRequest $request, Menu $menu): RedirectResponse
    {
        $this->service->update($menu, $request->validated());

        Session::flash('success');

        return redirect()->route('menu.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Menu  $menu
     *
     * @return RedirectResponse
     */
    public function destroy(Menu $menu): RedirectResponse
    {
        if ($menu->icon) unlink(Storage::path($menu->icon));
        $menu->delete();

        Session::flash('success');

        return redirect()->route('menu.index');
    }
}

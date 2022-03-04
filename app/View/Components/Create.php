<?php

namespace App\View\Components;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Create extends Component
{
    public string $title;
    public string $action;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $action)
    {
        $this->title = $title;
        $this->action = $action;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return Application|Factory|View
     */
    public function render()
    {
        return view('components.create');
    }
}

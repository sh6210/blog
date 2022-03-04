<?php

namespace App\View\Components;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Edit extends Component
{
    public string $title;
    public string $action;
    public string $indexPageLink;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $action, $indexPageLink)
    {
        $this->title = $title;
        $this->action = $action;
        $this->indexPageLink = $indexPageLink;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return Application|Factory|View
     */
    public function render()
    {
        return view('components.edit');
    }
}

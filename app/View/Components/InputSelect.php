<?php

namespace App\View\Components;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputSelect extends Component
{
    public string $label;
    public $placeholder;
    public $records;
    public string $name;
    private $selected;
    public string $required;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $records, $selected = null, $label = false, $placeholder = null, $required = '')
    {
        $this->name = $name;
        $this->label = $label ?: prepareInputLabel($name);
        $this->records = $records;
        $this->selected = $selected;
        $this->placeholder = $placeholder ?? "Select {$this->label}";
        $this->required = $required;
    }

    public function isSelected($option): bool
    {
        return is_array($this->selected) ? in_array($this->selected, $option) : $option == $this->selected;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return Application|Factory|View
     */
    public function render()
    {
        return view('components.input-select');
    }
}

<?php

namespace App\View\Components;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\View\Component;
use phpDocumentor\Reflection\Types\Mixed_;
use function PHPUnit\Framework\isInstanceOf;

class InputSelect extends Component
{
    public string $label;
    public $placeholder;
    public $records;
    public string $name;
    private $selected;
    public string $required;
    public bool $multiple;
    public string $id;
    public bool $placeholderSelected;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $records, $selected = null, $label = false, $placeholder = null, $placeholderSelected = true, $multiple = false, $required = '')
    {
        $this->name = $name . ($multiple ? '[]' : '');
        $this->label = $label ?: prepareInputLabel($name);
        $this->records = $records;
        $this->selected = $selected;
        $this->placeholder = $placeholder ?? "Select {$this->label}";
        $this->placeholderSelected = $placeholderSelected;
        $this->required = $required;
        $this->multiple = $multiple;
        $this->id = preg_replace('/[\[\]]/', '', $name);
    }

    public function isSelected($option): bool
    {
        return $this->selected instanceof Collection ? $this->selected->contains($option) : $option == $this->selected;
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

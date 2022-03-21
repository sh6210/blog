<?php

namespace App\View\Components;

use App\Models\Menu;
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
    public $targetColumn;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $name,
        $records,
        $targetColumn = '',
        $selected = null,
        $label = false,
        $placeholder = null,
        $placeholderSelected = true,
        $multiple = false,
        $required = ''
    )
    {
        $this->name = $name . ($multiple ? '[]' : '');
        $this->targetColumn = $targetColumn;
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
    public function render(): View|Factory|Application
    {
        return view('components.input-select');
    }
}

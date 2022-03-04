<?php

namespace App\View\Components;

use Illuminate\View\Component;

class InputTextarea extends Component
{
    public string $name;
    public int $rows;
    public int $cols;
    public $label;
    public $placeholder;
    public $value;
    public $required;

    public function __construct($name, $label = false, $rows = 5, $cols = 5, $placeholder = false, $value = false, $required = false)
    {
        $this->name = $name;
        $this->label = $label ?: prepareInputLabel($name);
        $this->rows = $rows;
        $this->cols = $cols;
        $this->placeholder = $placeholder ?? $label;
        $this->value = old($name, $value);
        $this->required = $required;
    }

    public function render()
    {
        return view('components.input-textarea');
    }
}

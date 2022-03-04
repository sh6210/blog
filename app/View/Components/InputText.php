<?php

namespace App\View\Components;

use Illuminate\View\Component;

class InputText extends Component
{
    public string $name;
    public string $label;
    public string $labelFor;
    public $placeholder;
    public $value;
    public $inputId;
    public $inputClass;
    public string $required;
    public string $type;

    public function __construct($name, $type = 'text', $label = false, $placeholder = false, $value = false, $inputClass = false, $inputId = false, $required = false)
    {
        $this->name = $name;
        $this->label = $label ?: prepareInputLabel($name);
        $this->labelFor = $inputId ?? '';
        $this->placeholder = $placeholder ?? $label;
        $this->value = old($name, $value);
        $this->inputId = $inputId;
        $this->inputClass = $inputClass;
        $this->required = $required ? 'required' : '';
        $this->type = $type;
    }

    public function render()
    {
        return view('components.input-text');
    }
}

<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Select extends Component
{
    public $name;
    public $label;
    public $attr;
    public $data;
    public $value;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $attr, $label, $data, $value)
    {
        $this->name = $name;
        $this->attr = $attr;
        $this->label = $label;
        $this->data = $data;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.select', ['data' => $this->data]);
    }
}

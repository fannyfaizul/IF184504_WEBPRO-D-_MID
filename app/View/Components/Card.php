<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{
    public $name;
    public $debt;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $debt)
    {
        $this->name = $name;
        $this->debt = $debt;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card');
    }
}

<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Locutors extends Component
{
    public $locutors;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($locutors = [])
    {
        $this->locutors = $locutors;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.locutors');
    }
}

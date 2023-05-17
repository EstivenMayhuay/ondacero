<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ProgramsBlock extends Component
{
    public $programs;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($programs)
    {
        $this->programs = $programs;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.programs-block');
    }
}

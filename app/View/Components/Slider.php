<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Slider extends Component
{

    public $arrNews;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($arrNews)
    {
        $this->arrNews = $arrNews;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.slider');
    }
}

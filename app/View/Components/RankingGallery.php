<?php

namespace App\View\Components;

use Illuminate\View\Component;

class RankingGallery extends Component
{

    public $arrMusics;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($arrMusics)
    {
        $this->arrMusics = $arrMusics;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.ranking-gallery');
    }
}

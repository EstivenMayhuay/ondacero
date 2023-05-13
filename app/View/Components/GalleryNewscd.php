<?php

namespace App\View\Components;

use Illuminate\View\Component;

class GalleryNewscd extends Component
{

    /*
        This component required array with the following properties

        $new = [
            'title' => 'Estiven Mayhuay',
            'urlPhoto' => 'https://estivenmayhuay.com/main.png,
            'catName' => 'Entretenimiento',
            'fecCreado => '2023-05-12 13:23:05'
        ]

        $categories & $years is required when $showFilter is true
    */

    public $news;
    public $categories;
    public $showFilter;
    public $years;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($news, $showFilter = false, $categories = [], $years = [])
    {
        $this->news = $news;
        $this->categories = $categories;
        $this->showFilter = $showFilter;
        $this->years = $years;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.gallery-newscd');
    }
}

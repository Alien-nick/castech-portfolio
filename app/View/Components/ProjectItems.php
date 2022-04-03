<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ProjectItems extends Component
{
    /**
     * @param string $title
     * @param array  $categories
     * @param string $image
     * @param string $url
     */
    public function __construct(public string $title, public array $categories, public string $image, public string $url)
    {
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.project-items');
    }
}
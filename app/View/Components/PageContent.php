<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PageContent extends Component
{
     /**
     * Title Of Table
     *
     * @var string $title
     */
    public $title;
    /**
     * Resources url
     *
     * @var string $resource
     */
    public $resource;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $resource)
    {
        $this->title = $title;
        $this->resource = $resource;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.page-content');
    }
}

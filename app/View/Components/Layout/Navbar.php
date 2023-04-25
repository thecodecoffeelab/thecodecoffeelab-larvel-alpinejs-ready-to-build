<?php

namespace App\View\Components\Layout;

use Illuminate\View\Component;

class Navbar extends Component
{
    public array $navigationItems = [];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->navigationItems = [
            ['label' => 'About', 'href' => '#about-sau'],
            ['label' => 'Services', 'href' => '#services'],
            ['label' => 'SkyHigh', 'href' => '#skyhigh'],
            ['label' => 'UniGlobal', 'href' => '#uniglobal'],
            ['label' => 'AfriOil', 'href' => '#afrioilgas'],
            ['label' => 'Gallery', 'href' => '#gallery'],
            ['label' => 'Contact', 'href' => '#contact'],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('layout.navbar');
    }
}

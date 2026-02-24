<?php

namespace App\View\Components\Content;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ItemsTemplate3 extends Component
{
    public  ?object $items;
    public function __construct($items)
    {
        $this->items = $items;

    }


    public function render(): View|Closure|string
    {
        return view('components.content.items-template3');
    }
}

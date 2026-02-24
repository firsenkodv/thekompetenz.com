<?php

namespace App\View\Components\Content;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class OurValues extends Component
{
    public ?string $title;
    public ?array $items;
    public function __construct()
    {
        $this->title = config2('moonshine.work.our_value_title');
        $this->items = config2('moonshine.work.our_value_options');
    }


    public function render(): View|Closure|string
    {
        return view('components.content.our-values');
    }
}

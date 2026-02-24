<?php

namespace App\View\Components\Content;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ItemTemplate extends Component
{
    public ?object $item;
    public ?string $feedBackForm;
    public function __construct($item)
    {
        $this->item = $item;
        $this->feedBackForm = $item->getTable()??'';
    }

    public function render(): View|Closure|string
    {
        return view('components.content.item-template');
    }
}

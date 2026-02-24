<?php

namespace App\View\Components\Content;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TrustedProtection extends Component
{

    public ?string $title;
    public ?string $img;
    public ?array $items;
    public function __construct()
    {
         $this->title = config2('moonshine.home.trusted_protection_title');
         $this->img = config2('moonshine.home.temp_img');
         $this->items = config2('moonshine.home.trusted_protection');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.content.trusted-protection');
    }
}

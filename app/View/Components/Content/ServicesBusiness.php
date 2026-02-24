<?php

namespace App\View\Components\Content;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ServicesBusiness extends Component
{
    public ?string $business;
    public ?string $individuals;
    public ?string $text;
    public ?array $items;
    public function __construct()
    {
        $this->business = config2('moonshine.home.services_business');
        $this->individuals = config2('moonshine.home.services_individuals');
        $this->text = config2('moonshine.home.services_text');

        $this->items = config2('moonshine.home.services_carousel');

    }


    public function render(): View|Closure|string
    {
        return view('components.content.services-business');
    }
}

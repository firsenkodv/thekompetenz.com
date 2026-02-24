<?php

namespace App\View\Components\Swiper;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CaruselCentered extends Component
{
    public function __construct(
        public array $slides
    )
    {
        //
    }

    public function render(): View|Closure|string
    {
        return view('components.swiper.carusel-centered');
    }
}

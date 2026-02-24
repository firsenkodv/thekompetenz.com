<?php

namespace App\View\Components\Content;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LatestInsights extends Component
{

    public ?string $title;
    public ?string $link;
    public ?array $items;
    public function __construct()
    {
        $this->title = config2('moonshine.home.latest_insights');
        $this->link = config2('moonshine.home.latest_insights_link');


        $this->items = config2('moonshine.home.latest_insights_options');
    }


    public function render(): View|Closure|string
    {
        return view('components.content.latest-insights');
    }
}

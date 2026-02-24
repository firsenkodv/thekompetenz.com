<?php

namespace App\View\Components\Content;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Vacancies extends Component
{
    public ?string $title;
    public ?string $subtitle;
    public ?string $link;
    public function __construct()
    {
        $this->title = config2('moonshine.home.vacancies_title');
        $this->subtitle = config2('moonshine.home.vacancies_subtitle');
        $this->link = config2('moonshine.home.vacancies_link');
    }

    public function render(): View|Closure|string
    {
        return view('components.content.vacancies');
    }
}

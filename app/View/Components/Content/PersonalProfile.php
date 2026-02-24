<?php

namespace App\View\Components\Content;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PersonalProfile extends Component
{
public ?string $title;
public ?string $subtitle;
    public function __construct()
    {
        $this->title = config2('moonshine.home.personal_profile_title');
        $this->subtitle = config2('moonshine.home.personal_profile_subtitle');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.content.personal-profile');
    }
}

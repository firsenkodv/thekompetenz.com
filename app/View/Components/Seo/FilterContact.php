<?php

namespace App\View\Components\Seo;

use Closure;
use Domain\Contact\ViewModel\ContactViewModel;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FilterContact extends Component
{
    public  ?array $list;
    public function __construct($items)
    {
        $office = [];
        foreach ($items as $item) {
            $office[$item->id]['json_title']  = $item->title;
            //  $office[$item->id]['id']  = $item->id;
        }
     $this->list = $office;

    }



    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.seo.filter-contact');
    }
}

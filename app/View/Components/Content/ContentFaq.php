<?php

namespace App\View\Components\Content;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ContentFaq extends Component
{
    public ?string $faq_title;
    public  ?object $faq;
    public function __construct($item)
    {
        $this->faq_title = (isset($item->faq_title))? $item->faq_title : '';
        $this->faq = (isset($item->faq))? $item->faq : null;



    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.content.content-faq');
    }
}

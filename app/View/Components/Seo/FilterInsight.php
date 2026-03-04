<?php

namespace App\View\Components\Seo;

use Closure;
use Domain\Insight\ViewModel\InsightViewModel;
use Domain\Solution\SolutionCategory\ViewModel\SolutionCategoryViewModel;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FilterInsight extends Component
{
    public  ?array $tags;
    public  ?array $materials;
    public function __construct($items)
    {
        $tags = InsightViewModel::make()->tags();
        $a = [];
        foreach ($tags as $item) {
            $a[$item->id]['json_title'] = $item->title;
            //  $office[$item->id]['id']  = $item->id;
        }
        $this->tags = $a;


        $this->materials = [
            ['json_title' => 'Recently added'],
            ['json_title' => 'All materials'],
        ];

}


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.seo.filter-insight');
    }
}

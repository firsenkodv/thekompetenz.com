<?php

namespace Domain\Solution\SolutionItem;

use App\Models\SolutionCategory;
use App\Models\SolutionItem;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Cache;
use Support\Traits\Makeable;

class SolutionItemViewModel
{
    use Makeable;
    public function items($solution_category_id):?Collection
    {
            return SolutionItem::query()
                ->where('published', 1)
                ->with('solutionCategory')
                ->where('solution_category_id', $solution_category_id)
                ->orderBy('sorting', 'desc')
                ->limit(4)
                ->get();

    }


}

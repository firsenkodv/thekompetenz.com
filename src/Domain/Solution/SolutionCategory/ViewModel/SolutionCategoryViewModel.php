<?php

namespace Domain\Solution\SolutionCategory\ViewModel;

use App\Models\SolutionCategory;
use App\Models\Work;
use Illuminate\Support\Facades\Cache;
use Support\Traits\Makeable;

class SolutionCategoryViewModel
{
    use Makeable;

    public function categories()
    {
        return Cache::rememberForever('solution_categories', function () {
            return SolutionCategory::query()
                ->where('published', 1)
                ->orderBy('sorting', 'desc')
                ->get();
        });

    }


}

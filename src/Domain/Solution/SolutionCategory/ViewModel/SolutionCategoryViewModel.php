<?php

namespace Domain\Solution\SolutionCategory\ViewModel;

use App\Models\SolutionCategory;
use App\Models\SolutionTag;
use App\Models\Work;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Cache;
use Support\Traits\Makeable;

class SolutionCategoryViewModel
{
    use Makeable;

    public function categories():?LengthAwarePaginator
    {
        return Cache::rememberForever('solution_categories', function () {
            return SolutionCategory::query()
                ->where('published', 1)
                ->orderBy('sorting', 'desc')
                ->paginate(config('site.constants.paginate'));
        });

    }
    public function tags():?Collection
    {
            return SolutionTag::query()
                ->orderBy('created_at', 'desc')
                ->get();

    }

    public function search($request):?Collection
    {
        $sorting = (isset($request['sorting'])) ? ($request['sorting'] == 'Recently added')? 'desc' : 'asc' : 'desc';
        return SolutionCategory::whereHas('solutionTags', function ($query) use ($request) {
            if (isset($request['tag'])) {
                $query->where('solution_tags.title', $request['tag']); // фильтр по нужному тегу
            }
        })
            ->orderBy('created_at', $sorting)
            ->get();

    }

}

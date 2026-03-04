<?php

namespace Domain\Insight\ViewModel;

use App\Models\Insight;
use App\Models\InsightTag;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Support\Traits\Makeable;

class InsightViewModel
{
use Makeable;
    public function insights(): ?LengthAwarePaginator
    {
            return Insight::query()
                ->where('published', 1)
                ->orderBy('sorting', 'desc')
                ->paginate(config('site.constants.paginate'));
    }

    public function tags():?Collection
    {
        return InsightTag::query()
            ->orderBy('created_at', 'desc')
            ->get();

    }

    public function search($request):?LengthAwarePaginator
    {
        $sorting = (isset($request['sorting'])) ? ($request['sorting'] == 'Recently added')? 'desc' : 'asc' : 'desc';
        return Insight::whereHas('insightTags', function ($query) use ($request) {
            if (isset($request['tag'])) {
                $query->where('insight_tags.title', $request['tag']); // фильтр по нужному тегу
            }
        })
            ->orderBy('created_at', $sorting)
            ->paginate(config('site.constants.paginate'));
    }


}

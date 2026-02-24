<?php

namespace Domain\Individual\ViewModel;

use App\Models\Individual;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Cache;
use Support\Traits\Makeable;

class IndividualViewModel
{
use Makeable;
    public function businesses(): ?LengthAwarePaginator
    {
            return Individual::query()
                ->where('published', 1)
                ->orderBy('sorting', 'desc')
                ->paginate(config('site.constants.paginate'));
    }

}

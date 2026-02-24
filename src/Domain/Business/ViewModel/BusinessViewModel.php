<?php

namespace Domain\Business\ViewModel;

use App\Models\Business;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Cache;
use Support\Traits\Makeable;

class BusinessViewModel
{
    use Makeable;

    public function businesses(): ?LengthAwarePaginator
    {
            return Business::query()
                ->where('published', 1)
                ->orderBy('sorting', 'desc')
                ->paginate(config('site.constants.paginate'));
    }

}

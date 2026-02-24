<?php

namespace Domain\Insight\ViewModel;

use App\Models\Insight;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Cache;
use Support\Traits\Makeable;

class InsightViewModel
{
use Makeable;
    // Добавляем аргумент pageNumber для передачи номера страницы
    public function insights(): ?LengthAwarePaginator
    {
            return Insight::query()
                ->where('published', 1)
                ->orderBy('sorting', 'desc')
                ->paginate(config('site.constants.paginate'));
    }
}

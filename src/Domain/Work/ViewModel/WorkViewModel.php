<?php

namespace Domain\Work\ViewModel;

use App\Models\Work;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Cache;
use Support\Traits\Makeable;

class WorkViewModel
{
    use Makeable;

    public function works(): ?Collection
    {
        return Cache::rememberForever('works', function () {
            return Work::query()
                ->where('published', 1)
                ->orderBy('sorting', 'desc')
                ->get();
        });

    }
}

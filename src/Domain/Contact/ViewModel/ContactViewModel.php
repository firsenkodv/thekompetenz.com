<?php

namespace Domain\Contact\ViewModel;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Cache;
use Support\Traits\Makeable;

class ContactViewModel
{
use Makeable;

    public function contacts(): ?Collection
    {
        return Cache::rememberForever('contacts', function () {
            return Contact::query()
                ->where('published', 1)
                ->orderBy('sorting', 'desc')
                ->get();
        });

    }
    public function search($search): ?Collection
    {

        return Contact::query()
            ->where('published', 1)
            ->where('title', $search)
            ->orderBy('sorting', 'desc')
            ->get();
    }

}

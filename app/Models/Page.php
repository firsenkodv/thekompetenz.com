<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Page extends Model
{
    protected $table = 'pages';
    protected $guarded = [];

    protected $casts = [
        'params' => 'collection',
        'gallery' => 'collection',
        'faq' => 'collection',
        'files' => 'collection',
    ];



    protected static function boot(): void
    {
        parent::boot();

        static::deleted(function ($model) {
            cache_clear();
        });

        # Выполняем действия после сохранения
        static::saved(function ($model) {
            cache_clear();
        });


    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SolutionCategory extends Model
{
    protected $table = 'solution_categories';
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

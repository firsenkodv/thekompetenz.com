<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class SolutionTag extends Model
{
    protected $table = 'solution_tags';
    protected $guarded = [];

    protected $casts = [
        'params' => 'collection',
    ];

    public function solutionCategory():BelongsToMany
    {
        return $this->belongsToMany(SolutionCategory::class);

    }

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

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class InsightTag extends Model
{
    protected $table = 'insight_tags';
    protected $guarded = [];

    protected $casts = [
        'params' => 'collection',
    ];

    public function insight():BelongsToMany
    {
        return $this->belongsToMany(Insight::class);

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

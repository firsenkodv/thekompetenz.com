<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

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

    /**
     * Связь один ко многим с решениями (SolutionItem)
     */
    public function solutionItems()
    {
        return $this->hasMany(SolutionItem::class);
    }

    public function solutionTags(): BelongsToMany
    {
        return $this->belongsToMany(SolutionTag::class);

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

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contacts';
    protected $guarded = [];

    protected $casts = [
        'params' => 'collection',
        'map' => 'collection',
    ];

    public function getMapArrayAttribute(): array|bool
    {
        if ($this->map) {
            foreach ($this->map as $k=>$item) {

                $yandexMapData = [
                        'title' => $item['map_title'],
                        'coordinates' => $item['map_coordinates'],
                        'phone' => ($item['map_phone'])?format_phone($item['map_phone']):'',
                        'email' => $item['map_email'],
                ];

            }

            return ($yandexMapData)??false;
        }

        return false;
    }

    //$item
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

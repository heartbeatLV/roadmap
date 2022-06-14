<?php

declare(strict_types = 1);

namespace App\Traits;

use Illuminate\Support\Str;

trait Sluggable {
    public function getRouteKeyName() {
        return 'slug';
    }

    public static function bootSluggable() : void {
        static::created(static function ($model) : void {
            if (!$model->slug) {
                $model->slug = Str::slug($model->id . ' ' . $model->title);
                $model->save();
            }
        });
    }
}

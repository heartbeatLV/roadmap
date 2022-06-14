<?php

declare(strict_types = 1);

namespace App\Models;

use App\Traits\HasOgImage;
use App\Traits\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model {
    use HasFactory, HasOgImage, Sluggable;

    public $fillable = [
        'title',
        'slug',
        'url',
        'description',
    ];

    public function boards() {
        return $this->hasMany(Board::class)->orderBy('sort_order');
    }

    public function items() {
        return $this->hasManyThrough(Item::class, Board::class);
    }
}

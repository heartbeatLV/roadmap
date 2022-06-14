<?php

declare(strict_types = 1);

namespace App\Models;

use App\Traits\HasOgImage;
use App\Traits\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Board extends Model {
    use HasFactory, HasOgImage, Sluggable;

    public $fillable = [
        'slug',
        'title',
        'visible',
        'sort_order',
        'description',
        'block_votes',
        'sort_items_by',
        'block_comments',
        'can_users_create',
    ];
    public $casts = [
        'visible'          => 'boolean',
        'can_users_create' => 'boolean',
        'block_comments'   => 'boolean',
        'block_votes'      => 'boolean',
    ];

    public const SORT_ITEMS_BY_POPULAR = 'popular';
    public const SORT_ITEMS_BY_LATEST = 'latest';

    public function project() {
        return $this->belongsTo(Project::class);
    }

    public function items() {
        return $this->hasMany(Item::class);
    }

    public function scopeVisible($query) {
        return $query->where('visible', true);
    }

    public function canUsersCreateItem() {
        return $this->can_users_create;
    }
}

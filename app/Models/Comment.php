<?php

declare(strict_types = 1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Xetaio\Mentions\Models\Mention;
use Xetaio\Mentions\Models\Traits\HasMentionsTrait;

class Comment extends Model {
    use HasFactory, HasMentionsTrait;

    public $fillable = [
        'content',
        'parent_id',
        'user_id',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function item() {
        return $this->belongsTo(Item::class);
    }

    public function parent() {
        return $this->belongsTo(self::class, 'parent_id');
    }

    public function comments() {
        return $this->hasMany(self::class, 'parent_id');
    }

    public function mentions() {
        return $this->morphMany(Mention::class, 'model');
    }
}

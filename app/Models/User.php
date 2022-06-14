<?php

declare(strict_types = 1);

namespace App\Models;

use Filament\Models\Contracts\FilamentUser;
use Filament\Models\Contracts\HasAvatar;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use function in_array;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements FilamentUser, HasAvatar {
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'username',
        'password',
        'notification_settings',
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $casts = [
        'admin'                 => 'bool',
        'email_verified_at'     => 'datetime',
        'notification_settings' => 'array',
    ];

    public function canAccessFilament() : bool {
        return $this->admin;
    }

    public function getGravatar($size = 150) {
        return 'https://www.gravatar.com/avatar/' . md5(mb_strtolower(trim(Arr::get($this->attributes, 'email')))) . '?s=' . (int)$size;
    }

    public function getFilamentAvatarUrl() : ?string {
        return $this->getGravatar();
    }

    public function items() {
        return $this->hasMany(Item::class);
    }

    public function votes() : HasMany {
        return $this->hasMany(Vote::class);
    }

    public function votedItems() {
        return $this->hasManyThrough(Item::class, Vote::class, 'user_id', 'items.id', 'id', 'model_id');
    }

    public function comments() {
        return $this->hasMany(Comment::class);
    }

    public function assignedItems() {
        return $this->belongsToMany(Item::class, 'item_user');
    }

    public function commentedItems() {
        return $this->hasManyThrough(
            Item::class,
            Comment::class,
            'user_id',
            'id',
            'id',
            'item_id'
        )->orderBy('comments.created_at', 'desc')->distinct();
    }

    public function mentions() {
        return $this
            ->morphedByMany(Comment::class, 'model', 'mentions', 'recipient_id')
            ->where('recipient_type', self::class);
    }

    public function userSocials() {
        return $this->hasMany(UserSocial::class);
    }

    public function wantsNotification($type) {
        return in_array($type, $this->notification_settings ?? [], true);
    }

    public static function booted() : void {
        static::creating(static function (self $user) : void {
            $user->username = Str::slug($user->name);
            $user->notification_settings = [
                'receive_mention_notifications',
                'receive_comment_reply_notifications',
            ];
        });

        static::updating(static function (self $user) : void {
            $user->username = Str::lower($user->username);
        });
    }
}

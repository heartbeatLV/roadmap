<?php

declare(strict_types = 1);

namespace App\Models;

use App\Traits\HasOgImage;
use App\Traits\Sluggable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Support\Str;
use Spatie\Activitylog\ActivitylogServiceProvider;

class Item extends Model {
    use HasFactory, HasOgImage, Sluggable;

    public $fillable = [
        'slug',
        'title',
        'content',
        'pinned',
        'project_id',
        'board_id',
        'user_id',
    ];
    protected $casts = [
        'pinned' => 'boolean',
    ];

    public const STATUS_OPEN = 'open';
    public const STATUS_REVIEW = 'under-review';
    public const STATUS_PLANNED = 'planned';
    public const STATUS_LIVE = 'live';

    public function board() : BelongsTo {
        return $this->belongsTo(Board::class);
    }

    public function user() : BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function project() : BelongsTo {
        return $this->belongsTo(Project::class);
    }

    public function votes() : MorphMany {
        return $this->morphMany(Vote::class, 'model');
    }

    public function subscribedVotes() : MorphMany {
        return $this->votes()->where('subscribed', true);
    }

    public function comments() : HasMany {
        return $this->hasMany(Comment::class);
    }

    public function assignedUsers() : BelongsToMany {
        return $this->belongsToMany(User::class, 'item_user');
    }

    public function activities() : MorphMany {
        return $this->morphMany(ActivitylogServiceProvider::determineActivityModel(), 'subject');
    }

    public function scopePopular($query) {
        return $query->orderBy('total_votes', 'desc');
    }

    public function scopeHasNoProjectAndBoard($query) {
        return $query->whereNull('project_id')->whereNull('board_id');
    }

    public function hasVoted(User $user = null) : bool {
        $user ??= auth()->user();

        if (!$user) {
            return false;
        }

        return (bool)$this->votes()->where('user_id', $user->id)->exists();
    }

    public function getUserVote(User $user = null) : Vote|null {
        $user ??= auth()->user();

        if (!$user) {
            return null;
        }

        return $this->votes()->where('user_id', $user->id)->first();
    }

    public function toggleUpvote(User $user = null) {
        $user ??= auth()->user();

        if (!$user) {
            return redirect()->route('login');
        }

        $vote = $this->votes()->where('user_id', $user->id)->first();

        if ($vote) {
            $vote->delete();

            return true;
        }

        $vote = $this->votes()->create();
        $vote->user()->associate($user)->save();

        return $vote;
    }

    public function isPinned() : bool {
        return $this->pinned;
    }

    protected function excerpt() : Attribute {
        return Attribute::make(
            get: fn ($value) => Str::limit(strip_tags(str($this->attributes['content'])->markdown()->trim()), 150),
        );
    }
}

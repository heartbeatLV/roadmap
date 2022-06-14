<?php

declare(strict_types = 1);

namespace App\Observers;

use App\Models\Comment;
use App\Models\User;
use App\Notifications\CommentHasReplyNotification;
use App\Notifications\Item\ItemHasNewCommentNotification;
use Xetaio\Mentions\Parser\MentionParser;

class CommentObserver {
    public function created(Comment $comment) : void {
        $parser = new MentionParser($comment, [
            'regex_replacement' => [
                '{character}' => '@',
                '{pattern}'   => '[A-Za-z0-9_-]',
                '{rules}'     => '{4,20}',
            ],
        ]);

        $content = $parser->parse($comment->content);

        $comment->updateQuietly([
            'content' => $content,
        ]);

        $userIds = $comment->item?->votes()
            ->subscribed()
            ->where('user_id', '!=', auth()->id()) // Don't get the current user, they obviously already know about the new comment
            ->pluck('user_id') ?? collect();

        // User::query()->whereIn('id', $userIds->toArray())->get()->each(static function (User $user) use ($comment) : void {
        //     $user->notify(new ItemHasNewCommentNotification($comment));
        // });

        // $comment->parent?->user->notify(new CommentHasReplyNotification($comment));
    }

    public function deleting(Comment $comment) : void {
        $comment->mentions()->delete();
    }
}

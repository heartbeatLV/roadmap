<?php

declare(strict_types = 1);

namespace App\Observers;

use App\Mail\Admin\ItemHasBeenCreatedEmail;
use App\Models\Item;
use App\Models\User;
use App\Notifications\Item\ItemUpdatedNotification;
use App\Settings\GeneralSettings;
use Mail;

class ItemObserver {
    public function created(Item $item) : void {
        activity()
            ->performedOn($item)
            ->log('opened');

        if ($receivers = app(GeneralSettings::class)->send_notifications_to) {
            foreach ($receivers as $receiver) {
                Mail::to($receiver['email'])->send(new ItemHasBeenCreatedEmail($receiver, $item));
            }
        }
    }

    public function updating(Item $item) : void {
        $isDirty = false;

        if ($item->isDirty('board_id')) {
            activity()
                ->performedOn($item)
                ->log('moved item to board ' . $item->board->title);

            $isDirty = true;
        }

        if ($item->isDirty('project_id') && $item->project) {
            activity()
                ->performedOn($item)
                ->log('moved item to project ' . $item->project->title);

            $isDirty = true;
        }

        if ($item->isDirty('pinned') && $item->pinned) {
            activity()
                ->performedOn($item)
                ->log('pinned');

            $isDirty = true;
        }

        if ($item->isDirty('pinned') && !$item->pinned) {
            activity()
                ->performedOn($item)
                ->log('un-pinned');

            $isDirty = true;
        }

        if ($isDirty) {
            // $users = $item->subscribedVotes()->with('user')->get()->pluck('user');

            // $users->each(static function (User $user) use ($item) : void {
            //     $user->notify(new ItemUpdatedNotification($item));
            // });
        }
    }

    public function deleting(Item $item) : void {
        $item->votes()->delete();
        $item->comments()->delete();
    }
}

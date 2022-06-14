<?php

declare(strict_types = 1);

namespace App\Notifications\Item;

use App\Models\Item;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ItemUpdatedNotification extends Notification implements ShouldQueue {
    use Queueable;

    public function __construct(public Item $item) {
    }

    public function via($notifiable) {
        return ['mail'];
    }

    public function toMail($notifiable) {
        return (new MailMessage())
            ->subject('Item ' . $this->item->title . ' has new updates')
            ->markdown('emails.item.updated', [
                'user'       => $notifiable,
                'item'       => $this->item,
                'activities' => $this->item->activities()->latest()->limit(2)->get(),
            ]);
    }
}

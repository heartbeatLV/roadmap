<?php

declare(strict_types = 1);

namespace App\Jobs\Items;

use App\Models\Item;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Collection;

class RecalculateItemsVotes implements ShouldQueue {
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function __construct(public Collection $itemIds) {
    }

    public function handle() : void {
        Item::query()
            ->whereIn('id', $this->itemIds->toArray())
            ->each(static function (Item $item) : void {
                $item->total_votes = $item->votes()->count();
            });
    }
}

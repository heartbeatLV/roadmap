<?php

declare(strict_types = 1);

namespace App\Http\Livewire\Item;

use App\Models\Item;
use App\Models\Vote;
use Livewire\Component;

class VoteButton extends Component {
    public Item $item;
    public Vote|null $vote;

    public function toggleUpvote() : void {
        $this->item->toggleUpvote();
        $this->item = $this->item->refresh();
    }

    public function unsubscribe() : void {
        $this->vote->update(['subscribed' => false]);

        $this->item = $this->item->refresh();
    }

    public function subscribe() : void {
        $this->vote->update(['subscribed' => true]);

        $this->item = $this->item->refresh();
    }

    public function render() {
        $this->vote = $this->item->getUserVote();

        return view('livewire.item.vote-button');
    }
}

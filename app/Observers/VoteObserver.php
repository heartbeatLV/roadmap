<?php

declare(strict_types = 1);

namespace App\Observers;

use App\Models\Vote;

class VoteObserver {
    public function created(Vote $vote) : void {
        $this->updateTotalVotes($vote);
    }

    public function deleted(Vote $vote) : void {
        $this->updateTotalVotes($vote);
    }

    protected function updateTotalVotes(Vote $vote) : void {
        $vote->item->total_votes = $vote->item->votes()->count();
        $vote->item->save();
    }
}

<?php

declare(strict_types = 1);

namespace App\Http\Livewire;

use Closure;
use Filament\Tables;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;

class RecentMentions extends Component implements HasTable {
    use InteractsWithTable;

    public function render() {
        return view('livewire.recent-mentions');
    }

    protected function getTableQuery() : Builder {
        return auth()->user()->mentions()->latest('mentions.created_at')->getQuery();
    }

    protected function getTableRecordsPerPageSelectOptions() : array {
        return [5];
    }

    protected function getTableColumns() : array {
        return [
            Tables\Columns\TextColumn::make('content')->label(trans('table.content'))->searchable(),
            Tables\Columns\TextColumn::make('item.title')->label(trans('table.title'))->searchable(),
            Tables\Columns\TextColumn::make('created_at')->dateTime()->sortable()->label(trans('table.created_at')),
        ];
    }

    protected function getTableRecordUrlUsing() : ?Closure {
        return static fn ($record) => route('items.show', [$record->item]) . '#comment-' . $record->model_id;
    }
}

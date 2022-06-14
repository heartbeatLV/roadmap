<?php

declare(strict_types = 1);

namespace App\Http\Livewire;

use Closure;
use Filament\Tables;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;

class My extends Component implements HasTable {
    use InteractsWithTable;

    public $type = 'default';

    public function render() {
        return view('livewire.my');
    }

    protected function getTableQuery() : Builder {
        if ($this->type === 'default') {
            return auth()->user()->items()->with('board.project')->latest()->getQuery();
        }

        if ($this->type === 'commentedOn') {
            return auth()->user()->commentedItems()->getQuery();
        }

        return auth()->user()->votedItems()->with('board.project')->latest('votes.created_at')->getQuery();
    }

    protected function getTableRecordsPerPageSelectOptions() : array {
        return [5];
    }

    protected function getTableColumns() : array {
        return [
            Tables\Columns\TextColumn::make('title')->label(trans('table.title'))->searchable(),
            Tables\Columns\TextColumn::make('total_votes')->label(trans('table.total-votes'))->sortable(),
            Tables\Columns\TextColumn::make('board.project.title')->label(trans('table.project')),
            Tables\Columns\TextColumn::make('board.title')->label(trans('table.board')),
            Tables\Columns\TextColumn::make('created_at')->sortable()->label(function () {
                if ($this->type === 'commentedOn') {
                    return trans('table.commented_on');
                }

                return trans('table.created_at');
            })->dateTime(),
        ];
    }

    protected function getTableRecordUrlUsing() : ?Closure {
        return static function ($record) {
            if (!$record->board) {
                return route('items.show', $record);
            }

            if (!$record->project) {
                return route('items.show', $record);
            }

            return route('projects.items.show', [$record->project, $record]);
        };
    }
}

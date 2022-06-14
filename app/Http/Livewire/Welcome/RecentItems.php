<?php

declare(strict_types = 1);

namespace App\Http\Livewire\Welcome;

use App\Models\Item;
use App\Settings\GeneralSettings;
use Closure;
use Filament\Tables;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Arr;
use Livewire\Component;

class RecentItems extends Component implements HasTable {
    use InteractsWithTable;

    public function render() {
        return view('livewire.welcome.recent-items');
    }

    protected function getTableQuery() : Builder {
        $recentItemsConfig = collect(app(GeneralSettings::class)->dashboard_items)->first();

        return Item::query()
            ->with('board.project')
            ->when(Arr::get($recentItemsConfig, 'must_have_board'), static fn (Builder $query) => $query->has('board'))
            ->when(Arr::get($recentItemsConfig, 'must_have_project'), static fn (Builder $query) => $query->has('project'))
            ->limit(10);
    }

    protected function isTablePaginationEnabled() : bool {
        return false;
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

    protected function getTableColumns() : array {
        return [
            Tables\Columns\TextColumn::make('title')->label(trans('table.title')),
            Tables\Columns\TextColumn::make('total_votes')->label(trans('table.total-votes'))->sortable(),
            Tables\Columns\TextColumn::make('board.project.title')->label(trans('table.project')),
            Tables\Columns\TextColumn::make('board.title')->label(trans('table.board')),
        ];
    }

    protected function getDefaultTableSortColumn() : ?string {
        return 'created_at';
    }

    protected function getDefaultTableSortDirection() : ?string {
        return 'desc';
    }
}

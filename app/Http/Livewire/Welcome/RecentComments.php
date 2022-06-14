<?php

declare(strict_types = 1);

namespace App\Http\Livewire\Welcome;

use App\Models\Comment;
use Filament\Tables;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;

class RecentComments extends Component implements HasTable {
    use InteractsWithTable;

    public function render() {
        return view('livewire.welcome.recent-comments');
    }

    protected function getTableQuery() : Builder {
        return Comment::query()->limit(10);
    }

    protected function isTablePaginationEnabled() : bool {
        return false;
    }

    protected function getTableColumns() : array {
        return [
            Tables\Columns\TextColumn::make('content')->label(trans('table.content')),
            Tables\Columns\TextColumn::make('item.title')->label(trans('table.item')),
        ];
    }

    protected function getDefaultTableSortColumn() : ?string {
        return 'created_at';
    }

    protected function getDefaultTableSortDirection() : ?string {
        return 'desc';
    }
}

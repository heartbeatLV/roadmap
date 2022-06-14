<?php

declare(strict_types = 1);

namespace App\Filament\Resources\ItemResource\Pages;

use App\Filament\Resources\ItemResource;
use App\Models\Item;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;

class ListItems extends ListRecords {
    protected static string $resource = ItemResource::class;

    protected function getTableQuery() : Builder {
        return Item::query()
            ->where(static fn (Builder $query) => $query->whereHas('board')->orWhereHas('project'));
    }
}

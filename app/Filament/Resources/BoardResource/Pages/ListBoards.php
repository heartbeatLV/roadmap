<?php

declare(strict_types = 1);

namespace App\Filament\Resources\BoardResource\Pages;

use App\Filament\Resources\BoardResource;
use Filament\Resources\Pages\ListRecords;

class ListBoards extends ListRecords {
    protected static string $resource = BoardResource::class;
}

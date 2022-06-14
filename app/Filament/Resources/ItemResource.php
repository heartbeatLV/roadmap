<?php

declare(strict_types = 1);

namespace App\Filament\Resources;

use App\Filament\Resources\ItemResource\Pages;
use App\Filament\Resources\ItemResource\RelationManagers\ActivitiesRelationManager;
use App\Filament\Resources\ItemResource\RelationManagers\CommentsRelationManager;
use App\Filament\Resources\ItemResource\RelationManagers\VotesRelationManager;
use App\Models\Item;
use App\Models\Project;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;

class ItemResource extends Resource {
    protected static ?string $model = Item::class;
    protected static ?string $navigationIcon = 'heroicon-o-archive';
    protected static ?string $navigationGroup = 'Manage';
    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Form $form) : Form {
        return $form
            ->schema([
                Forms\Components\Card::make([
                    Forms\Components\TextInput::make('title')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\BelongsToSelect::make('user_id')
                        ->relationship('user', 'name')
                        ->default(auth()->user()->id)
                        ->preload()
                        ->required()
                        ->searchable(),
                    Forms\Components\MarkdownEditor::make('content')
                        ->columnSpan(2)
                        ->required()
                        ->minLength(5)
                        ->maxLength(65535),
                ])->columns()->columnSpan(3),

                Forms\Components\Card::make([
                    Forms\Components\Select::make('project_id')
                        ->label('Project')
                        ->options(Project::query()->pluck('title', 'id'))
                        ->reactive()
                        ->required(),
                    Forms\Components\Select::make('board_id')
                        ->label('Board')
                        ->options(static fn ($get) => Project::find($get('project_id'))?->boards()->pluck('title', 'id') ?? [])
                        ->required(),
                    Forms\Components\Toggle::make('pinned')
                        ->label('Pinned')
                        ->default(false),
                    Forms\Components\Placeholder::make('created_at')
                        ->label('Created at')
                        ->visible(static fn ($record) => filled($record))
                        ->content(static fn ($record) => $record->created_at->format('d-m-Y H:i:s')),
                    Forms\Components\Placeholder::make('updated_at')
                        ->label('Updated at')
                        ->visible(static fn ($record) => filled($record))
                        ->content(static fn ($record) => $record->updated_at->format('d-m-Y H:i:s')),
                ])->columnSpan(1),
            ])
            ->columns(4);
    }

    public static function table(Table $table) : Table {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id'),
                Tables\Columns\TextColumn::make('title')->searchable(),
                Tables\Columns\TextColumn::make('total_votes')->label('Votes')->sortable(),
                Tables\Columns\TextColumn::make('comments_count')->counts('comments')->sortable(),
                Tables\Columns\TextColumn::make('project.title'),
                Tables\Columns\TextColumn::make('board.title'),
                Tables\Columns\TextColumn::make('user.name'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->label('Date'),
                Tables\Columns\BooleanColumn::make('pinned')->label('Pinned'),
            ])
            ->filters([
                Filter::make('created_at')
                    ->form([
                        Forms\Components\Select::make('project_id')
                            ->label(trans('table.project'))
                            ->reactive()
                            ->options(Project::pluck('title', 'id')),
                        Forms\Components\Select::make('board_id')
                            ->label(trans('table.board'))
                            ->options(static fn ($get) => Project::find($get('project_id'))?->boards()->pluck('title', 'id') ?? []),
                        Forms\Components\Toggle::make('pinned')
                            ->label('Pinned'),
                    ])
                    ->query(static function (Builder $query, array $data) : Builder {
                        return $query
                            ->when(
                                $data['project_id'],
                                static fn (Builder $query, $projectId) : Builder => $query->where('project_id', $projectId),
                            )
                            ->when(
                                $data['board_id'],
                                static fn (Builder $query, $boardId) : Builder => $query->where('board_id', $boardId),
                            )
                            ->when(
                                $data['pinned'],
                                static fn (Builder $query) : Builder => $query->where('pinned', $data['pinned']),
                            );
                    }),
            ])
            ->defaultSort('created_at', 'desc');
    }

    public static function getRelations() : array {
        return [
            ActivitiesRelationManager::class,
            CommentsRelationManager::class,
            VotesRelationManager::class,
        ];
    }

    public static function getPages() : array {
        return [
            'index'  => Pages\ListItems::route('/'),
            'create' => Pages\CreateItem::route('/create'),
            'edit'   => Pages\EditItem::route('/{record}/edit'),
        ];
    }
}

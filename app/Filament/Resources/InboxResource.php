<?php

declare(strict_types = 1);

namespace App\Filament\Resources;

use App\Filament\Resources\InboxResource\Pages;
use App\Filament\Resources\InboxResource\RelationManagers\CommentsRelationManager;
use App\Filament\Resources\InboxResource\RelationManagers\VotesRelationManager;
use App\Models\Item;
use App\Models\Project;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class InboxResource extends Resource {
    protected static ?string $model = Item::class;
    protected static ?string $navigationIcon = 'heroicon-o-inbox';
    protected static ?string $navigationGroup = 'Manage';
    protected static ?string $label = 'Inbox';
    protected static ?string $pluralLabel = 'Inbox';
    protected static ?string $slug = 'inbox';

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
                        ->disabled()
                        ->preload()
                        ->required()
                        ->searchable(),
                    Forms\Components\MarkdownEditor::make('content')
                        ->columnSpan(2)
                        ->required()
                        ->maxLength(65535),
                ])->columns()->columnSpan(3),

                Forms\Components\Card::make([
                    Forms\Components\Select::make('project_id')
                        ->label('Project')
                        ->options(Project::query()->pluck('title', 'id'))
                        ->reactive(),
                    Forms\Components\Select::make('board_id')
                        ->label('Board')
                        ->options(static fn ($get) => Project::find($get('project_id'))?->boards()->pluck('title', 'id') ?? []),
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
                Tables\Columns\TextColumn::make('title')->searchable(),
                Tables\Columns\TextColumn::make('user.email'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->label('Date'),
            ])
            ->filters([
                //
            ])
            ->defaultSort('created_at', 'desc');
    }

    public static function getRelations() : array {
        return [
            CommentsRelationManager::class,
            VotesRelationManager::class,
        ];
    }

    public static function getPages() : array {
        return [
            'index'  => Pages\ListInboxes::route('/'),
            'create' => Pages\CreateInbox::route('/create'),
            'edit'   => Pages\EditInbox::route('/{record}/edit'),
        ];
    }

    protected static function getNavigationBadge() : ?string {
        return Item::query()->hasNoProjectAndBoard()->count();
    }
}

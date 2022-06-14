<?php

declare(strict_types = 1);

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Models\Board;
use App\Models\Project;
use App\Settings\GeneralSettings;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Ramsey\Uuid\Uuid;

class ProjectResource extends Resource {
    protected static ?string $model = Project::class;
    protected static ?string $navigationIcon = 'heroicon-o-clipboard-list';
    protected static ?string $navigationGroup = 'Manage';

    public static function form(Form $form) : Form {
        $boards = collect(app(GeneralSettings::class)->default_boards)->mapWithKeys(static function ($board) {
            return [Uuid::uuid4()->toString() => [
                'title'       => $board,
                'description' => null,
            ]];
        })->toArray();

        return $form
            ->schema([
                Forms\Components\Card::make([
                    Forms\Components\TextInput::make('title')
                        ->columnSpan(1)
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('url')
                        ->columnSpan(1)
                        ->maxLength(255),
                    Forms\Components\TextInput::make('slug')
                        ->helperText('Leave blank to generate one automatically')
                        ->columnSpan(2)
                        ->maxLength(255),
                    Forms\Components\MarkdownEditor::make('description')
                        ->columnSpan(2)
                        ->maxLength(65535),
                    Forms\Components\HasManyRepeater::make('boards')
                        ->relationship('boards')
                        ->orderable('sort_order')
                        ->default($boards)
                        ->columnSpan(2)
                        ->schema([
                            Forms\Components\Grid::make(2)->schema([
                                Forms\Components\Toggle::make('visible')->default(true)->helperText('Hides the board from the public view, but will still be accessible if you use the direct URL.'),
                                Forms\Components\Toggle::make('can_users_create')->helperText('Allow users to create items in this board.'),
                                Forms\Components\Toggle::make('block_comments')->helperText('Block users from commenting to items in this board.'),
                                Forms\Components\Toggle::make('block_votes')->helperText('Block users from voting to items in this board.'),
                            ]),
                            Forms\Components\Grid::make(2)->schema([
                                Forms\Components\TextInput::make('title')->required(),
                                Forms\Components\Select::make('sort_items_by')
                                    ->options([
                                        Board::SORT_ITEMS_BY_POPULAR => 'Popular',
                                        Board::SORT_ITEMS_BY_LATEST  => 'Latest',
                                    ])
                                    ->default(Board::SORT_ITEMS_BY_POPULAR)
                                    ->required(),
                            ]),

                            Forms\Components\Textarea::make('description')->helperText('Used as META description for SEO purposes.'),
                        ]),
                ])->columns(),
            ]);
    }

    public static function table(Table $table) : Table {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id'),
                Tables\Columns\TextColumn::make('title')->searchable(),
                Tables\Columns\TextColumn::make('boards_count')->sortable()->counts('boards'),
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
            //
        ];
    }

    public static function getPages() : array {
        return [
            'index'  => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit'   => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}

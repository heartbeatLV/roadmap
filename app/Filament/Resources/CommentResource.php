<?php

declare(strict_types = 1);

namespace App\Filament\Resources;

use App\Filament\Resources\CommentResource\Pages;
use App\Models\Comment;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class CommentResource extends Resource {
    protected static ?string $model = Comment::class;
    protected static ?string $navigationIcon = 'heroicon-o-chat';
    protected static ?string $navigationGroup = 'Manage';

    public static function form(Form $form) : Form {
        return $form
            ->schema([
                Forms\Components\Card::make([
                    Forms\Components\BelongsToSelect::make('user_id')
                        ->columnSpan(1)
                        ->relationship('user', 'name')
                        ->searchable(),
                    Forms\Components\BelongsToSelect::make('item_id')
                        ->columnSpan(1)
                        ->relationship('item', 'title')
                        ->searchable(),
                    Forms\Components\MarkdownEditor::make('content')->columnSpan(2),
                ])->columns(2),
            ]);
    }

    public static function table(Table $table) : Table {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('content')->searchable(),
                Tables\Columns\TextColumn::make('item.title'),
                Tables\Columns\TextColumn::make('user.name'),
                Tables\Columns\TextColumn::make('created_at')->dateTime()->sortable()->label('Date'),
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
            'index'  => Pages\ListComments::route('/'),
            'create' => Pages\CreateComment::route('/create'),
            'edit'   => Pages\EditComment::route('/{record}/edit'),
        ];
    }
}

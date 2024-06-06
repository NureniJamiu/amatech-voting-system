<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CandidateResource\Pages;
use App\Models\Candidate;
use App\Models\Position;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
// use Filament\Infolists\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class CandidateResource extends Resource
{
    protected static ?string $model = Candidate::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    protected static ?string $navigationGroup = 'Ballot Administration';

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make([
                    TextInput::make('name'),
                    TextInput::make('image'),
                    // FileUpload::make('image'),

                    Select::make('position_id')
                        ->label('Post vying for')
                        ->options(Position::all()->pluck('name', 'id'))
                        ->searchable()
                        ->preload()
                        ->native(false),

                    Select::make('level')
                        ->options([
                            '100L' => '100 Level',
                            '200L' => '200 Level',
                            '300L' => '300 Level',
                            '400L' => '400 Level',
                            '500L' => '500 Level',
                        ])
                        ->searchable()
                        ->native(false),
                ])->columns(2),

                Section::make([

                    MarkdownEditor::make('about'),
                ]),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('position.name')
                    ->label('Position'),
                Tables\Columns\TextColumn::make('about')
                    ->markdown(),
                Tables\Columns\TextColumn::make('level'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCandidates::route('/'),
            'create' => Pages\CreateCandidate::route('/create'),
            'edit' => Pages\EditCandidate::route('/{record}/edit'),
        ];
    }
}

<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PollResource\Pages;
use App\Models\Poll;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class PollResource extends Resource
{
    protected static ?string $model = Poll::class;

    protected static ?string $navigationIcon = 'heroicon-o-chart-bar';

    protected static ?string $navigationGroup = 'Ballot Administration';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->description('Set up a new polling unit effortlessly. Your administrative control starts here.')
                    ->aside()
                    ->schema([
                        TextInput::make('title')
                            ->placeholder('Enter poll title'),
                        Textarea::make('description')
                            ->placeholder('Enter poll description'),
                        DateTimePicker::make('end_time')
                            ->format($format = 'Y-m-d H:i:s')
                            ->placeholder('Set poll end time'),
                        Toggle::make('is_active')->label('active'),
                    ]),
            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->searchable(),
                Tables\Columns\TextColumn::make('description'),
                Tables\Columns\IconColumn::make('is_active')->boolean()->label('Status'),
                Tables\Columns\TextColumn::make('end_time'),
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
            'index' => Pages\ListPolls::route('/'),
            'create' => Pages\CreatePoll::route('/create'),
            'edit' => Pages\EditPoll::route('/{record}/edit'),
        ];
    }
}

<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use App\Providers\UserApproved;
use App\Providers\UserRejected;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Components\Tab;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    protected static ?string $navigationGroup = 'User management';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->searchable(),
                Tables\Columns\TextColumn::make('email')->searchable(),
                Tables\Columns\IconColumn::make('user_approved_at')->boolean()->label('isApproved'),
            ])
            ->filters([
                //
            ])
            ->actions([
                // Tables\Actions\EditAction::make(),
                // Tables\Actions\ActionGroup::make([

                    Tables\Actions\Action::make('Approve')
                        ->action(function (User $record ) {
                            $record->user_approved_at = true;
                            $record->save();

                            // dispatch approve email event
                            UserApproved::dispatch($record);
                        })
                        ->requiresConfirmation(),
                    Tables\Actions\Action::make('Reject')
                        ->action(function (User $record ) {
                            $record->delete();

                            //dispatch reject email event
                            UserRejected::dispatch($record);
                        })
                        ->color('danger')
                        ->requiresConfirmation()
                ])
            // ])
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }


}

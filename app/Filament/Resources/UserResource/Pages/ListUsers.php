<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use App\Models\User;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

use Filament\Resources\Components\Tab;
use Illuminate\Database\Eloquent\Builder;

use Filament\Support\Enums\IconPosition;

class ListUsers extends ListRecords
{
    protected static string $resource = UserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }


    public function getTabs(): array
    {
        return [
            'pending users' => Tab::make('Pending')
                ->badge(User::query()->where('user_approved_at', false)->count())
                ->badgeColor('warning')
                ->modifyQueryUsing(fn (Builder $query) => $query->where('user_approved_at', false)),
            'approved users' => Tab::make('Approved')
                ->badge(User::query()->where('user_approved_at', true)->count())
                ->modifyQueryUsing(fn (Builder $query) => $query->where('user_approved_at', true)),
            'admin' => Tab::make('Admin')
                ->badge(User::query()->where('isAdmin', true)->count())
                ->modifyQueryUsing(fn (Builder $query) => $query->where('isAdmin', true)),
        ];
    }
}

<?php

namespace App\Filament\App\Pages;

use Filament\Pages\Page;

class VotingCenter extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-check-badge';

    protected static ?string $navigationGroup = "Elections";

    protected static string $view = 'filament.app.pages.voting-center';
}

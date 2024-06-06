<?php

namespace App\Filament\App\Pages;

use Filament\Pages\Page;

class Candidates extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    protected static ?string $navigationGroup = 'Elections';

    protected static string $view = 'filament.app.pages.candidates';
}

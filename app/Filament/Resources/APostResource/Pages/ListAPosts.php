<?php

namespace App\Filament\Resources\APostResource\Pages;

use App\Filament\Resources\APostResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAPosts extends ListRecords
{
    protected static string $resource = APostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

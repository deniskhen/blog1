<?php

namespace App\Filament\Resources\APostResource\Pages;

use App\Filament\Resources\APostResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAPost extends EditRecord
{
    protected static string $resource = APostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

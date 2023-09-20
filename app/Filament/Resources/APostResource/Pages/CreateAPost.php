<?php

namespace App\Filament\Resources\APostResource\Pages;

use App\Filament\Resources\APostResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateAPost extends CreateRecord
{
    protected static string $resource = APostResource::class;
}

<?php

namespace App\Filament\Resources\SetContactResource\Pages;

use App\Filament\Resources\SetContactResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSetContact extends EditRecord
{
    protected static string $resource = SetContactResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

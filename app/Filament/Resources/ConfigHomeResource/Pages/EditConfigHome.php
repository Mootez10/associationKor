<?php

namespace App\Filament\Resources\ConfigHomeResource\Pages;

use App\Filament\Resources\ConfigHomeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditConfigHome extends EditRecord
{
    protected static string $resource = ConfigHomeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

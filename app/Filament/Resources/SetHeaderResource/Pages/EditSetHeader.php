<?php

namespace App\Filament\Resources\SetHeaderResource\Pages;

use App\Filament\Resources\SetHeaderResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSetHeader extends EditRecord
{
    protected static string $resource = SetHeaderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

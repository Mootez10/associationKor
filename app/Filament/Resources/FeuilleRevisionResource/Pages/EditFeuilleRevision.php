<?php

namespace App\Filament\Resources\FeuilleRevisionResource\Pages;

use App\Filament\Resources\FeuilleRevisionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFeuilleRevision extends EditRecord
{
    protected static string $resource = FeuilleRevisionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

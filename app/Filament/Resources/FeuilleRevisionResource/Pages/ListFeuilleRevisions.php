<?php

namespace App\Filament\Resources\FeuilleRevisionResource\Pages;

use App\Filament\Resources\FeuilleRevisionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFeuilleRevisions extends ListRecords
{
    protected static string $resource = FeuilleRevisionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

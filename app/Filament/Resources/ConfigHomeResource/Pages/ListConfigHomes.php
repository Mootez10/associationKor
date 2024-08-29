<?php

namespace App\Filament\Resources\ConfigHomeResource\Pages;

use App\Filament\Resources\ConfigHomeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListConfigHomes extends ListRecords
{
    protected static string $resource = ConfigHomeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\SetHeaderResource\Pages;

use App\Filament\Resources\SetHeaderResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSetHeaders extends ListRecords
{
    protected static string $resource = SetHeaderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

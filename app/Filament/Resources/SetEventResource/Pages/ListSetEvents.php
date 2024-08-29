<?php

namespace App\Filament\Resources\SetEventResource\Pages;

use App\Filament\Resources\SetEventResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSetEvents extends ListRecords
{
    protected static string $resource = SetEventResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

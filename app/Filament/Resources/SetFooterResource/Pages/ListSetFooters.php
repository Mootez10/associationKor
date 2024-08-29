<?php

namespace App\Filament\Resources\SetFooterResource\Pages;

use App\Filament\Resources\SetFooterResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSetFooters extends ListRecords
{
    protected static string $resource = SetFooterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

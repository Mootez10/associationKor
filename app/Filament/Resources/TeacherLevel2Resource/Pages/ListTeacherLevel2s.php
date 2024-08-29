<?php

namespace App\Filament\Resources\TeacherLevel2Resource\Pages;

use App\Filament\Resources\TeacherLevel2Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTeacherLevel2s extends ListRecords
{
    protected static string $resource = TeacherLevel2Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

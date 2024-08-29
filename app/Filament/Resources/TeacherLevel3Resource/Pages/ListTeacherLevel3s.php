<?php

namespace App\Filament\Resources\TeacherLevel3Resource\Pages;

use App\Filament\Resources\TeacherLevel3Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTeacherLevel3s extends ListRecords
{
    protected static string $resource = TeacherLevel3Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\TeacherLevel1Resource\Pages;

use App\Filament\Resources\TeacherLevel1Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTeacherLevel1s extends ListRecords
{
    protected static string $resource = TeacherLevel1Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

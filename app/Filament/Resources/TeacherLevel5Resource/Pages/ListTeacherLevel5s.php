<?php

namespace App\Filament\Resources\TeacherLevel5Resource\Pages;

use App\Filament\Resources\TeacherLevel5Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTeacherLevel5s extends ListRecords
{
    protected static string $resource = TeacherLevel5Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\TeacherLevel4Resource\Pages;

use App\Filament\Resources\TeacherLevel4Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTeacherLevel4s extends ListRecords
{
    protected static string $resource = TeacherLevel4Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

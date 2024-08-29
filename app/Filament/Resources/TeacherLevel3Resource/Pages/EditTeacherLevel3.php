<?php

namespace App\Filament\Resources\TeacherLevel3Resource\Pages;

use App\Filament\Resources\TeacherLevel3Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTeacherLevel3 extends EditRecord
{
    protected static string $resource = TeacherLevel3Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

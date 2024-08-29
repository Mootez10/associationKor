<?php

namespace App\Filament\Resources\TeacherLevel1Resource\Pages;

use App\Filament\Resources\TeacherLevel1Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTeacherLevel1 extends EditRecord
{
    protected static string $resource = TeacherLevel1Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

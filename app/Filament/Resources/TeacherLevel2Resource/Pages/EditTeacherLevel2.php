<?php

namespace App\Filament\Resources\TeacherLevel2Resource\Pages;

use App\Filament\Resources\TeacherLevel2Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTeacherLevel2 extends EditRecord
{
    protected static string $resource = TeacherLevel2Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

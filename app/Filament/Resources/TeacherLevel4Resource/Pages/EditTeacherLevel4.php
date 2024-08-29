<?php

namespace App\Filament\Resources\TeacherLevel4Resource\Pages;

use App\Filament\Resources\TeacherLevel4Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTeacherLevel4 extends EditRecord
{
    protected static string $resource = TeacherLevel4Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

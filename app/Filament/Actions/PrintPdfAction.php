<?php

namespace App\Filament\Actions;

use Filament\Tables\Actions\Action;
use Illuminate\Database\Eloquent\Model;
use Barryvdh\DomPDF\Facade\Pdf;

class PrintPdfAction extends Action
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->label('Print PDF')
            ->icon('heroicon-o-printer')
            ->action(function (Model $record) {
                $pdf = Pdf::loadView('jozeaama', ['record' => $record]);
                return $pdf->download('jozeaama.pdf');
            });
    }
}

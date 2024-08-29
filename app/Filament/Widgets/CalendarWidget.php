<?php

namespace App\Filament\Widgets;

use App\Filament\Resources\CalenderResource;
use Filament\Actions\EditAction;
use Filament\Actions\Action;
use Filament\Forms\Components\Actions;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Widgets\Widget;
use App\Models\Calender;
use illuminate\Database\Eloquent\Model;
use Saade\FilamentFullCalendar\Actions\CreateAction;
use Saade\FilamentFullCalendar\Actions\DeleteAction;
use Saade\FilamentFullCalendar\Actions\ViewAction;
use Saade\FilamentFullCalendar\Widgets\FullCalendarWidget;

class CalendarWidget extends FullCalendarWidget

{
    public Model | string | null $model = Calender::class;

    


    public function fetchEvents(array $fetchInfo): array
    {
        return Calender::query()
            ->where('start_at', '>=', $fetchInfo['start'])
            ->where('end_at', '<=', $fetchInfo['end'])
            ->get()
            ->map(
                fn (Calender $calender) => [
                    'id' => $calender->id,
                    'title' => $calender->title,
                    'start' => $calender->start_at,
                    'end' => $calender->end_at,
                    /*'url' => CalenderResource::getUrl(name: 'edit', parameters: ['record' => $calender]),
                    'shouldOpenUrlInNewTab' => false,*/
                    'color' => $calender->color,
                ]
            )
            ->all();
    }

    public function getFormSchema(): array
    {
        return [
            TextInput::make('title'),
            ColorPicker::make('color'),

            Grid::make()
                ->schema([
                    DateTimePicker::make('start_at'),

                    DateTimePicker::make('end_at'),
                ]),
        ];
    }

    protected function headerActions(): array
    {
        return [
           CreateAction::make()
            ->label('Add Calender'),
        ];
    }

    protected function modalActions(): array
{
    return [
        CreateAction::make()
             ->mountUsing(
                 function (Form $form, array $arguments) {
                     $form->fill([
                         'start_at' => $arguments['start'] ?? null,
                         'end_at' => $arguments['end'] ?? null
                     ]);
                 }
                ),
                EditAction::make()
                ->mountUsing(
                    function (Calender $record, Form $form, array $arguments) {
                        $form->fill([
                            'title' => $record->title,
                            //'starts_at' => $arguments['event']['start'] ?? $record->starts_at,
                            //'ends_at' => $arguments['event']['end'] ?? $record->ends_at
                        ]);
                    }
                ),
        DeleteAction::make(),
    ];
}

    public function eventDidMount(): string
    {
        return <<<JS
            function({ event, timeText, isStart, isEnd, isMirror, isPast, isFuture, isToday, el, view }){
                el.setAttribute("x-tooltip", "tooltip");
                el.setAttribute("x-data", "{ tooltip: '"+event.title+"' }");
            }
        JS;
    }

    protected function viewAction(): Action
    {
        return ViewAction::make()
        ->modalFooterActions(actions: fn (ViewAction $action) => [
            EditAction::make(),
            DeleteAction::make(),
            $action->getModalCancelAction(),
        ]);
    }

}

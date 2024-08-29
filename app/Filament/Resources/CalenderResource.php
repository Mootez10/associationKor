<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CalenderResource\Pages;
use App\Filament\Resources\CalenderResource\RelationManagers;
use App\Models\Calender;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CalenderResource extends Resource
{
    protected static ?string $model = Calender::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar-days';

    protected static ?string $navigationGroup = "Configuration";
    
    protected static ?int $navigationSort = 4;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                ->required()
                ->maxLength(255),
                Forms\Components\ColorPicker::make('color')
                ->required(),
                Forms\Components\DateTimePicker::make('start_at')
                ->required(),
                Forms\Components\DateTimePicker::make('end_at')
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                ->searchable(),
                Tables\Columns\TextColumn::make('color')
                ->sortable(),
                Tables\Columns\TextColumn::make('start_at')
                ->dateTime()
                ->sortable(),
                Tables\Columns\TextColumn::make('end_at')
                ->dateTime()
                ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault:true),
                Tables\Columns\TextColumn::make('updated_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault:true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCalenders::route('/'),
            'create' => Pages\CreateCalender::route('/create'),
            'edit' => Pages\EditCalender::route('/{record}/edit'),
        ];
    }
}

<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ConfigHomeResource\Pages;
use App\Filament\Resources\ConfigHomeResource\RelationManagers;
use App\Models\ConfigHome;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\FileUpload;

class ConfigHomeResource extends Resource
{
    protected static ?string $model = ConfigHome::class;

    protected static ?string $navigationIcon = 'heroicon-o-pencil-square';

    protected static ?string $navigationGroup = "Configuration";

    protected static ?int $navigationSort = 5;
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('banner')->preserveFilenames(),
                Forms\Components\FileUpload::make('banner2')->preserveFilenames(),
                Forms\Components\TextInput::make('nameSourra'),
                Forms\Components\FileUpload::make('logo')->preserveFilenames(),
                Forms\Components\TextInput::make('descAssociation'),
                Forms\Components\TextInput::make('activities'),
                Forms\Components\TextInput::make('services'),
                Forms\Components\FileUpload::make('service_item_icon')->preserveFilenames(),
                Forms\Components\TextInput::make('service_item_title'),
                Forms\Components\TextInput::make('service_item_desc'),
                Forms\Components\TextInput::make('upcoming_events'),
                Forms\Components\FileUpload::make('upcoming_event_banner')->preserveFilenames(),
                Forms\Components\TextInput::make('upcoming_event_title'),
                Forms\Components\TextInput::make('upcoming_event_datetime'),
                Forms\Components\TextInput::make('upcoming_event_descp'),
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('banner'),
                Tables\Columns\ImageColumn::make('banner2'),
                Tables\Columns\TextColumn::make('nameSourra'),
                Tables\Columns\ImageColumn::make('logo'),
                Tables\Columns\TextColumn::make('descAssociation'),
                Tables\Columns\TextColumn::make('activities'),
                Tables\Columns\TextColumn::make('services'),
                Tables\Columns\ImageColumn::make('service_item_icon'),
                Tables\Columns\TextColumn::make('service_item_title'),
                Tables\Columns\TextColumn::make('service_item_desc'),
                Tables\Columns\TextColumn::make('upcoming_events'),
                Tables\Columns\ImageColumn::make('upcoming_event_banner'),
                Tables\Columns\TextColumn::make('upcoming_event_title'),
                Tables\Columns\TextColumn::make('upcoming_event_datetime'),
                Tables\Columns\TextColumn::make('upcoming_event_descp'),
                
                

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
            'index' => Pages\ListConfigHomes::route('/'),
            'create' => Pages\CreateConfigHome::route('/create'),
            'edit' => Pages\EditConfigHome::route('/{record}/edit'),
        ];
    }
}

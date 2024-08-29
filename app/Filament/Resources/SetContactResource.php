<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SetContactResource\Pages;
use App\Filament\Resources\SetContactResource\RelationManagers;
use App\Models\SetContact;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SetContactResource extends Resource
{
    protected static ?string $model = SetContact::class;

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-left-ellipsis';

    protected static ?string $modelLabel = "SetContact";

    protected static ?string $navigationGroup = "Contacts";

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('icon1')->preserveFilenames(),
                Forms\Components\TextInput::make('title1'),
                Forms\Components\TextInput::make('location'),
                Forms\Components\TextInput::make('email'),
                Forms\Components\FileUpload::make('icon2')->preserveFilenames(),
                Forms\Components\TextInput::make('title2'),
                Forms\Components\TextInput::make('phone1'),
                Forms\Components\TextInput::make('phone2'),
                Forms\Components\FileUpload::make('icon3')->preserveFilenames(),
                Forms\Components\TextInput::make('title3'),
                Forms\Components\TextInput::make('email1'),
                Forms\Components\TextInput::make('email2'),
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('icon1'),
                Tables\Columns\TextColumn::make('title1'),
                Tables\Columns\TextColumn::make('location'),
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\ImageColumn::make('icon2'),
                Tables\Columns\TextColumn::make('title2'),
                Tables\Columns\TextColumn::make('phone1'),
                Tables\Columns\TextColumn::make('phone2'),
                Tables\Columns\ImageColumn::make('icon2'),
                Tables\Columns\TextColumn::make('title3'),
                Tables\Columns\TextColumn::make('email1'),
                Tables\Columns\TextColumn::make('email2'),
                
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
            'index' => Pages\ListSetContacts::route('/'),
            'create' => Pages\CreateSetContact::route('/create'),
            'edit' => Pages\EditSetContact::route('/{record}/edit'),
        ];
    }
}

<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SetFooterResource\Pages;
use App\Filament\Resources\SetFooterResource\RelationManagers;
use App\Models\SetFooter;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SetFooterResource extends Resource
{
    protected static ?string $model = SetFooter::class;

    protected static ?string $navigationIcon = 'heroicon-o-pencil-square';

    protected static ?string $navigationGroup = "Configuration";

    protected static ?int $navigationSort = 7;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('logo')->preserveFilenames(),
                Forms\Components\TextInput::make('descAssociation'),
                Forms\Components\TextInput::make('title1'),
                Forms\Components\TextInput::make('field1'),
                Forms\Components\TextInput::make('field2'),
                Forms\Components\TextInput::make('field3'),
                Forms\Components\TextInput::make('title2'),
                Forms\Components\TextInput::make('field4'),
                Forms\Components\TextInput::make('field5'),
                Forms\Components\TextInput::make('field6'),
                Forms\Components\TextInput::make('title3'),
                Forms\Components\TextInput::make('field7'),
                Forms\Components\TextInput::make('field8'),
                Forms\Components\TextInput::make('field9'),
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('logo'),
                Tables\Columns\TextColumn::make('descAssociation'),
                Tables\Columns\TextColumn::make('title1'),
                Tables\Columns\TextColumn::make('field1'),
                Tables\Columns\TextColumn::make('field2'),
                Tables\Columns\TextColumn::make('field3'),
                Tables\Columns\TextColumn::make('title2'),
                Tables\Columns\TextColumn::make('field4'),
                Tables\Columns\TextColumn::make('field5'),
                Tables\Columns\TextColumn::make('field6'),
                Tables\Columns\TextColumn::make('title6'),
                Tables\Columns\TextColumn::make('field7'),
                Tables\Columns\TextColumn::make('field8'),
                Tables\Columns\TextColumn::make('field9'),
            ])
            ->filters([
                //
            ])
            ->actions([
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
            'index' => Pages\ListSetFooters::route('/'),
            'create' => Pages\CreateSetFooter::route('/create'),
            'edit' => Pages\EditSetFooter::route('/{record}/edit'),
        ];
    }
}

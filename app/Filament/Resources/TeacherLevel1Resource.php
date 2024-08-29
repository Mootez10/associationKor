<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TeacherLevel1Resource\Pages;
use App\Filament\Resources\TeacherLevel1Resource\RelationManagers;
use App\Models\TeacherLevel1;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TeacherLevel1Resource extends Resource
{
    protected static ?string $model = TeacherLevel1::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    protected static ?string $navigationGroup = "Teachers";

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('picture')->required()->preserveFilenames(),
                Forms\Components\TextInput::make('name'),
                Forms\Components\TextInput::make('job'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('picture'),
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('job'),
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
            'index' => Pages\ListTeacherLevel1s::route('/'),
            'create' => Pages\CreateTeacherLevel1::route('/create'),
            'edit' => Pages\EditTeacherLevel1::route('/{record}/edit'),
        ];
    }
}

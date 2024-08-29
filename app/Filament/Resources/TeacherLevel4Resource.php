<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TeacherLevel4Resource\Pages;
use App\Filament\Resources\TeacherLevel4Resource\RelationManagers;
use App\Models\TeacherLevel4;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TeacherLevel4Resource extends Resource
{
    protected static ?string $model = TeacherLevel4::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    protected static ?string $navigationGroup = "Teachers";

    protected static ?int $navigationSort = 5;

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
            'index' => Pages\ListTeacherLevel4s::route('/'),
            'create' => Pages\CreateTeacherLevel4::route('/create'),
            'edit' => Pages\EditTeacherLevel4::route('/{record}/edit'),
        ];
    }
}

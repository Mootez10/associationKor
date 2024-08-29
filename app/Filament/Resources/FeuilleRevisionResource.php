<?php

namespace App\Filament\Resources;

use App\Filament\Actions\PrintPdfAction;
use App\Filament\Resources\FeuilleRevisionResource\Pages;
use App\Filament\Resources\FeuilleRevisionResource\RelationManagers;
use App\Models\FeuilleRevision;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\FileUpload;
use Barryvdh\DomPDF\Facade\Pdf;

class FeuilleRevisionResource extends Resource
{
    protected static ?string $model = FeuilleRevision::class;

    protected static ?string $navigationIcon = 'heroicon-o-paper-clip';

    

    protected static ?int $navigationSort = 10;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')->required(),
                Forms\Components\FileUpload::make('picture')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\ImageColumn::make('picture'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\Action::make('pdf') 
                    ->label('PDF')
                    ->color('success')
                    ->icon('heroicon-o-printer')
                    ->action(function (Model $record) {
                        $pdf = Pdf::loadView('jozeaama', ['record' => $record]);
        
                        return response()->stream(
                            function () use ($pdf) {
                                echo $pdf->stream();
                            },
                            200,
                            [
                                'Content-Type' => 'application/pdf',
                                'Content-Disposition' => 'inline; filename="jozeaama.pdf"',
                            ]
                        );
                    }),
                   
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
            'index' => Pages\ListFeuilleRevisions::route('/'),
            'create' => Pages\CreateFeuilleRevision::route('/create'),
            'edit' => Pages\EditFeuilleRevision::route('/{record}/edit'),
        ];
    }
}

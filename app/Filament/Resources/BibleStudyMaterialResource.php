<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BibleStudyMaterialResource\Pages;
use App\Filament\Resources\BibleStudyMaterialResource\RelationManagers;
use App\Models\BibleStudyMaterial;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\ImageColumn;

class BibleStudyMaterialResource extends Resource
{
    protected static ?string $model = BibleStudyMaterial::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Church Resources';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('ResourceTitle')
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('ResourceImage')
                    ->image()
                    ->disk('filament'),            
                Forms\Components\TextInput::make('ResourceLink')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('ResourceTitle')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('ResourceImage')
                ->disk('filament'),
                Tables\Columns\TextColumn::make('ResourceLink')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListBibleStudyMaterials::route('/'),
            //'create' => Pages\CreateBibleStudyMaterial::route('/create'),
            //'edit' => Pages\EditBibleStudyMaterial::route('/{record}/edit'),
        ];
    }
}

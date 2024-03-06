<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InKindDonationResource\Pages;
use App\Filament\Resources\InKindDonationResource\RelationManagers;
use App\Models\InKindDonation;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class InKindDonationResource extends Resource
{
    protected static ?string $model = InKindDonation::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Donations';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('user_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('DescriptionDonation')
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('ProofOfDonationInKind')
                    ->image()
                    ->disk('filament'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('DescriptionDonation')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('ProofOfDonationInKind')
                    ->disk('filament'),
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
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListInKindDonations::route('/'),
            'create' => Pages\CreateInKindDonation::route('/create'),
            'edit' => Pages\EditInKindDonation::route('/{record}/edit'),
        ];
    }
}

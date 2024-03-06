<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LiturgicalActivityResource\Pages;
use App\Filament\Resources\LiturgicalActivityResource\RelationManagers;
use App\Models\LiturgicalActivity;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LiturgicalActivityResource extends Resource
{
    protected static ?string $model = LiturgicalActivity::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Approvals';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('user_id')
                    ->required()
                    ->numeric()
                    ->default(1),
                Forms\Components\TextInput::make('ActivityType')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('ActivityName')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('ActivityHost')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('ActivityDescription')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DateTimePicker::make('ActivityDateTime')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('ActivityType')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ActivityName')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ActivityHost')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ActivityDescription')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ActivityDateTime')
                    ->dateTime()
                    ->sortable(),
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
            'index' => Pages\ListLiturgicalActivities::route('/'),
            //'create' => Pages\CreateLiturgicalActivity::route('/create'),
            //'edit' => Pages\EditLiturgicalActivity::route('/{record}/edit'),
        ];
    }
}

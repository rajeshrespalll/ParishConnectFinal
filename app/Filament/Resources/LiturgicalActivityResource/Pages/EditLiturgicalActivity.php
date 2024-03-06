<?php

namespace App\Filament\Resources\LiturgicalActivityResource\Pages;

use App\Filament\Resources\LiturgicalActivityResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLiturgicalActivity extends EditRecord
{
    protected static string $resource = LiturgicalActivityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

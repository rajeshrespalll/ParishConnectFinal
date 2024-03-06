<?php

namespace App\Filament\Resources\BibleStudyMaterialResource\Pages;

use App\Filament\Resources\BibleStudyMaterialResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBibleStudyMaterial extends EditRecord
{
    protected static string $resource = BibleStudyMaterialResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

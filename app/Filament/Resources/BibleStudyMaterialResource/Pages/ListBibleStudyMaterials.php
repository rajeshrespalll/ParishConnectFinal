<?php

namespace App\Filament\Resources\BibleStudyMaterialResource\Pages;

use App\Filament\Resources\BibleStudyMaterialResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBibleStudyMaterials extends ListRecords
{
    protected static string $resource = BibleStudyMaterialResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

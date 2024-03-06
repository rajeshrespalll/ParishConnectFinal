<?php

namespace App\Filament\Resources\LiturgicalActivityResource\Pages;

use App\Filament\Resources\LiturgicalActivityResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLiturgicalActivities extends ListRecords
{
    protected static string $resource = LiturgicalActivityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            //Actions\CreateAction::make(),
        ];
    }
}

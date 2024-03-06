<?php

namespace App\Filament\Resources\InKindDonationResource\Pages;

use App\Filament\Resources\InKindDonationResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInKindDonations extends ListRecords
{
    protected static string $resource = InKindDonationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            //Actions\CreateAction::make(),
        ];
    }
}

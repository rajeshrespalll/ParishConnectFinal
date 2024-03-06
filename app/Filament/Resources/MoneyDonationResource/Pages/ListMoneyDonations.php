<?php

namespace App\Filament\Resources\MoneyDonationResource\Pages;

use App\Filament\Resources\MoneyDonationResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMoneyDonations extends ListRecords
{
    protected static string $resource = MoneyDonationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            //Actions\CreateAction::make(),
        ];
    }
}

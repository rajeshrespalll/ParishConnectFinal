<?php

namespace App\Filament\Resources\MoneyDonationResource\Pages;

use App\Filament\Resources\MoneyDonationResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMoneyDonation extends EditRecord
{
    protected static string $resource = MoneyDonationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

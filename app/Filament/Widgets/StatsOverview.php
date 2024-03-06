<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\User;
use App\Models\InKindDonation;
use App\Models\MoneyDonation;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Users', User::query()->count() . ' ')
            ->description('All users from database')
            ->color('success'),
            Stat::make('In-Kind Donations', InKindDonation::query()->count() . ' ')
            ->description('In-Kind Donations Made')
            ->color('success'),
            Stat::make('Money Donations', '₱' . MoneyDonation::query()->sum('CashAmount'))
            ->description('Donations in Pesos')
            ->color('success'),
        ];
    }
}

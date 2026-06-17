<?php

namespace App\Filament\Resources\Satellites\Pages;

use App\Filament\Resources\Satellites\SatelliteResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSatellites extends ListRecords
{
    protected static string $resource = SatelliteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}

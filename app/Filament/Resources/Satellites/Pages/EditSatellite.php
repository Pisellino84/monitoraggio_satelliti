<?php

namespace App\Filament\Resources\Satellites\Pages;

use App\Filament\Resources\Satellites\SatelliteResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSatellite extends EditRecord
{
    protected static string $resource = SatelliteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}

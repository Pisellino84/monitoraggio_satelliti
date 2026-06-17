<?php

namespace App\Filament\Resources\Satellites;

use App\Filament\Resources\Satellites\Pages\CreateSatellite;
use App\Filament\Resources\Satellites\Pages\EditSatellite;
use App\Filament\Resources\Satellites\Pages\ListSatellites;
use App\Filament\Resources\Satellites\Schemas\SatelliteForm;
use App\Filament\Resources\Satellites\Tables\SatellitesTable;
use App\Models\Satellite;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SatelliteResource extends Resource
{

    protected static ?string $modelLabel = 'Satellite';

    protected static ?string $pluralModelLabel = 'Satelliti';

    protected static ?string $navigationLabel = 'Satelliti';

    protected static ?string $model = Satellite::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Satellite';

    public static function form(Schema $schema): Schema
    {
        return SatelliteForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SatellitesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListSatellites::route('/'),
            'create' => CreateSatellite::route('/create'),
            'edit' => EditSatellite::route('/{record}/edit'),
        ];
    }
}

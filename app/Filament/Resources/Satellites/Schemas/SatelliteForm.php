<?php

namespace App\Filament\Resources\Satellites\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class SatelliteForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('model')
                    ->required(),
                Select::make('customer_id')
                    ->relationship('customer', 'agency_name')
                    ->required(),
                FileUpload::make('image')
                    ->image()
                    ->directory('satellites')
                    ->required(),
                Select::make('status')
                    ->options([
                        'active' => 'Attivo',
                        'inactive' => 'Inattivo',
                        'in_alarm' => 'In Allarme',
                        'under_maintenance' => 'In Manutenzione',
                    ])
                    ->required(),
                TextInput::make('norad')
                    ->required()
                    ->numeric(),
                TextInput::make('cospair')
                    ->required(),
                Select::make('orbit_type')
                    ->options([
                        'LEO' => 'LEO',
                        'MEO' => 'MEO',
                        'GEO' => 'GEO',
                        'SSO' => 'SSO',
                    ])
                    ->required(),
                TextInput::make('inclination')
                    ->required()
                    ->prefix("°")
                    ->numeric(),
                TextInput::make('apogee')
                    ->required()
                    ->prefix("Km")
                    ->numeric(),
                TextInput::make('perigee')
                    ->required()
                    ->prefix("Km")
                    ->numeric(),
                DateTimePicker::make('lauch_date')
                    ->required(),
                Repeater::make('satelliteSensors')
                    ->relationship()
                    ->schema([
                        Select::make('sensor_id')
                            ->relationship('sensor', 'name')
                            ->required()
                            ->live(),
                        TextInput::make('quantity')->numeric()->default(1)
                    ])->columns(3)
            ]);
    }
}

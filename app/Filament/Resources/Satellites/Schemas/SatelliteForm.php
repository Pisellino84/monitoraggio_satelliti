<?php

namespace App\Filament\Resources\Satellites\Schemas;

use App\Filament\Resources\Customers\Schemas\CustomerForm;
use App\Filament\Resources\Sensors\Schemas\SensorForm;
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
                    ->label('Nome')
                    ->required(),
                TextInput::make('model')
                    ->label('Modello')
                    ->required(),
                Select::make('customer_id')
                    ->label('Cliente')
                    ->relationship('customer', 'agency_name')
                    ->editOptionForm(CustomerForm::configure(...))
                    ->createOptionForm(CustomerForm::configure(...))
                    ->required(),
                FileUpload::make('image')
                    ->label('Immagine')
                    ->image()
                    ->directory('satellites'),
                Select::make('status')
                    ->label('Stato')
                    ->options([
                        'active' => 'Attivo',
                        'inactive' => 'Inattivo',
                        'in_alarm' => 'In Allarme',
                        'under_maintenance' => 'In Manutenzione',
                    ])
                    ->required(),
                TextInput::make('norad')
                    ->label('Codice di Tracciamento')
                    ->required()
                    ->numeric(),
                TextInput::make('cospair')
                    ->label('Codice identificativo di Lancio')
                    ->required(),
                Select::make('orbit_type')
                    ->label('Tipo di Orbita')
                    ->options([
                        'LEO' => 'LEO',
                        'MEO' => 'MEO',
                        'GEO' => 'GEO',
                        'SSO' => 'SSO',
                    ])
                    ->required(),
                TextInput::make('inclination')
                    ->label('Inclinazione')
                    ->required()
                    ->prefix("°")
                    ->numeric(),
                TextInput::make('apogee')
                    ->label('Apogeo')
                    ->required()
                    ->prefix("Km")
                    ->numeric(),
                TextInput::make('perigee')
                    ->label('Perigeo')
                    ->required()
                    ->prefix("Km")
                    ->numeric(),
                DateTimePicker::make('lauch_date')
                    ->label('Data di Lancio')
                    ->required(),
                Repeater::make('satelliteSensors')
                    ->label('Sensori del Satellite')
                    ->relationship()
                    ->columnSpanFull()
                    ->schema([
                        Select::make('sensor_id')
                            ->editOptionForm(SensorForm::configure(...))
                            ->label("Sensore")
                            ->relationship('sensor', 'name')
                            ->required()
                            ->live(),
                        TextInput::make('quantity')->label("Quantità")->numeric()->default(1)
                    ])->columns(3)
            ]);
    }
}

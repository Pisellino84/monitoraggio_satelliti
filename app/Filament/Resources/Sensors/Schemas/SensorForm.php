<?php

namespace App\Filament\Resources\Sensors\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class SensorForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Nome')
                    ->required(),
                Textarea::make('description')
                    ->label('Descrizione')
                    ->required()
                    ->columnSpanFull(),
                Select::make('sensor_type')
                    ->options([
                        "magnetometer" => "Magnometro",
                        "star_tracker" => "Star Tracker",
                        "payload_temperature_sensor" => "Sensore Temperatura Carico Utile",
                        "solar_attitude_sensor" => "Sensore Assetto Solare",
                        "gyroscope" => "Giroscopio",
                    ])
                    ->label('Tipo di Sensore')
                    ->required(),
                TextInput::make('hardware_model')
                    ->label('Modello di Hardware')
                    ->required(),
                Select::make('status')
                    ->label('Stato')
                    ->options([
                        'active' => 'Attivo',
                        'inactive' => 'Inattivo',
                        'in_alarm' => 'In Allarme',
                        'under_maintenance' => 'In Manutenzione',
                    ])
                    ->required(),
            ]);
    }
}

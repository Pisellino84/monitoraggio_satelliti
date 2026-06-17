<?php

namespace App\Filament\Resources\Sensors\Schemas;

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
                    ->required(),
                Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('sensor_type')
                    ->required(),
                TextInput::make('hardware_model')
                    ->required(),
                TextInput::make('status')
                    ->required(),
            ]);
    }
}

<?php

namespace App\Filament\Resources\Customers\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class CustomerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('agency_name')
                    ->label('Nome dell\'Agenzia')
                    ->required(),
                Select::make('agency_type')
                ->label('Tipo di Agenzia')
                    ->options([
                        'military' => 'Militare',
                        'government' => 'Governativa',
                        'commercial' => 'Commerciale'
                    ])
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->suffix(".com")
                    ->required(),
                TextInput::make('cellphone')
                    ->label('Numero di Telefono')
                    ->tel()
                    ->prefix("+")
                    ->required(),
                Textarea::make('bio')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('monthly_billing')
                    ->label('Fatturazione Mensile')
                    ->prefix("€")
                    ->required()
                    ->numeric(),
            ]);
    }
}

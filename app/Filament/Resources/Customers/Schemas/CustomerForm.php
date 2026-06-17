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
                    ->options([
                        'military' => 'Militare',
                        'government' => 'Governativa',
                        'commercial' => 'Commerciale'
                    ])
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                TextInput::make('cellphone')
                    ->tel()
                    ->required(),
                Textarea::make('bio')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('monthly_billing')
                    ->required()
                    ->numeric(),
            ]);
    }
}

<?php

namespace App\Filament\Resources\AppSettings\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class AppSettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Parametrização')
                    ->columnSpanFull()
                    ->columns(3)
                    ->schema([
                        TextInput::make('support_phone')
                            ->label('Telefone de suporte')
                            ->columns(2)
                            ->maxLength(30),

                        Toggle::make('registration_open')
                            ->label('Inscricoes abertas')
                            ->columns(1)
                            ->default(true),

                        Toggle::make('maintenance_mode')
                            ->label('Modo manutencao')
                            ->columns(1)
                            ->default(false),
                    ]),
            ]);
    }
}

<?php

namespace App\Filament\Resources\AppSettings\Tables;

use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class AppSettingsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('support_phone')
                    ->label('Telefone suporte')
                    ->toggleable(),
                IconColumn::make('registration_open')
                    ->label('Inscricoes')
                    ->boolean(),
                IconColumn::make('maintenance_mode')
                    ->label('Manutencao')
                    ->boolean(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                //
            ]);
    }
}

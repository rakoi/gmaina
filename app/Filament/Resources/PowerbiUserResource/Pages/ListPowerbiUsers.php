<?php

namespace App\Filament\Resources\PowerbiUserResource\Pages;

use App\Filament\Resources\PowerbiUserResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPowerbiUsers extends ListRecords
{
    protected static string $resource = PowerbiUserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\PowerbiUserResource\Pages;

use App\Filament\Resources\PowerbiUserResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPowerbiUser extends EditRecord
{
    protected static string $resource = PowerbiUserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

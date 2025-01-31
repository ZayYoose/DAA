<?php

namespace App\Filament\Admin\Resources\AthleteResource\Pages;

use App\Filament\Admin\Resources\AthleteResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAthlete extends EditRecord
{
    protected static string $resource = AthleteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

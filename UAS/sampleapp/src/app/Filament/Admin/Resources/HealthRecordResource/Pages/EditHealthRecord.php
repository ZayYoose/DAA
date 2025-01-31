<?php

namespace App\Filament\Admin\Resources\HealthRecordResource\Pages;

use App\Filament\Admin\Resources\HealthRecordResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHealthRecord extends EditRecord
{
    protected static string $resource = HealthRecordResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Admin\Resources\PerformanceRecordResource\Pages;

use App\Filament\Admin\Resources\PerformanceRecordResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPerformanceRecord extends EditRecord
{
    protected static string $resource = PerformanceRecordResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

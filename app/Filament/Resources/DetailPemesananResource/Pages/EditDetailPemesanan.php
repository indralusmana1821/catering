<?php

namespace App\Filament\Resources\DetailPemesananResource\Pages;

use App\Filament\Resources\DetailPemesananResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDetailPemesanan extends EditRecord
{
    protected static string $resource = DetailPemesananResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

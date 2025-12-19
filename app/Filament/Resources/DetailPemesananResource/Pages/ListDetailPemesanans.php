<?php

namespace App\Filament\Resources\DetailPemesananResource\Pages;

use App\Filament\Resources\DetailPemesananResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDetailPemesanans extends ListRecords
{
    protected static string $resource = DetailPemesananResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

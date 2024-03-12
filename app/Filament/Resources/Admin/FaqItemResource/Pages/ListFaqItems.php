<?php

namespace App\Filament\Resources\Admin\FaqItemResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\Admin\FaqItemResource;

class ListFaqItems extends ListRecords
{
    protected static string $resource = FaqItemResource::class;

    protected function getHeaderActions(): array
    {
        return [Actions\CreateAction::make()];
    }
}

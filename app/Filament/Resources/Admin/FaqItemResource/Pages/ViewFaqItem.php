<?php

namespace App\Filament\Resources\Admin\FaqItemResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;
use App\Filament\Resources\Admin\FaqItemResource;

class ViewFaqItem extends ViewRecord
{
    protected static string $resource = FaqItemResource::class;

    protected function getHeaderActions(): array
    {
        return [Actions\EditAction::make()];
    }
}

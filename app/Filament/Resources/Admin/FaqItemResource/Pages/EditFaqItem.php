<?php

namespace App\Filament\Resources\Admin\FaqItemResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\Admin\FaqItemResource;

class EditFaqItem extends EditRecord
{
    protected static string $resource = FaqItemResource::class;

    protected function getHeaderActions(): array
    {
        return [Actions\DeleteAction::make()];
    }
}

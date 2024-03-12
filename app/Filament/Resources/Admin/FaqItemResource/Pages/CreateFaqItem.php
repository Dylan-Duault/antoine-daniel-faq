<?php

namespace App\Filament\Resources\Admin\FaqItemResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\Admin\FaqItemResource;

class CreateFaqItem extends CreateRecord
{
    protected static string $resource = FaqItemResource::class;
}

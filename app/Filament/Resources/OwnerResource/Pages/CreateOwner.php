<?php

namespace App\Filament\Resources\OwnerResource\Pages;

use App\Filament\Resources\OwnerResource;
use Filament\Resources\Pages\CreateRecord;

class CreateOwner extends CreateRecord
{
    protected static string $resource = OwnerResource::class;
    //return to index after creating it
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}

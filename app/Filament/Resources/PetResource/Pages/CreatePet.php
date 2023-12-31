<?php

namespace App\Filament\Resources\PetResource\Pages;

use App\Filament\Resources\PetResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePet extends CreateRecord
{
    protected static string $resource = PetResource::class;
    //return to index after creating it
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

}

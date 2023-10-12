<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;

    //return to index after creating it
   protected function getRedirectUrl(): string
   {
       return $this->getResource()::getUrl('index');
   }
}

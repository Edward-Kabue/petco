<?php
namespace App\Filament\Pages\Tenancy;

use App\Models\Clinic;
use Filament\Forms\Form;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\TextInput;
use Filament\Pages\Tenancy\RegisterTenant;
 
class RegisterClinic extends RegisterTenant
{
    public static function getLabel(): string
    {
        return 'Register Clinic';
    }
    
    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name'),
              
            ]);
    }
    
    protected function handleRegistration(array $data): Clinic
    {
        $clinic = Clinic::create($data);
        
        $clinic->users()->attach(auth()->user());
        
        return $clinic;
    }
}
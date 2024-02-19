<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Validator;

class LoginForm extends Component
{
   public $IDNumber;
   public $Password;

   public function submit()
   {
       $validator = Validator::make($this->getPublicPropertiesDefinedBySubClass(), [
           'IDNumber' => 'required|exists:Alumni,SNum',
           'Password' => 'required|exists:Alumni,Password',
       ]);

       if ($validator->fails()) {
           return $this->addError('IDNumber', 'Invalid ID number or password');
       }

       // The ID number and password are valid...
   }

   public function render()
   {
       return view('livewire.login-form');
   }
}


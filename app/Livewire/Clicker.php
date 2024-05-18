<?php

namespace App\Livewire;
use App\Models\User;

use Livewire\Component;

class Clicker extends Component
{

    //public function handleClick(){
      //  dump("clicked");
   // }

   public function createNewuser(){
     User::create([
        "name"=> "Test User",
        "email"=> "test@gamil.com",
        "password"=> '12345566',]);
   }
    public function render()
    {
        $title = "Test";
        $users= User::all();
        return view('livewire.clicker',
        ['title'=> $title,
        'users'=> $users]);
        
    
    }
}

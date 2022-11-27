<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;

class Register extends Component
{
    public function render()
    {
        return view('livewire.auth.register', [
            'title' => 'ali'
        ]);
    }

    public function register()
    {
        dd('hi');
    }
}

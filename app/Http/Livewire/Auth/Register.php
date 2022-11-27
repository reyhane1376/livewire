<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;

class Register extends Component
{
    public $name;
    public $email;
    public $password;

    // protected $rules = [
    //     'name' => 'required|min:6',
    //     'email' => 'required|email|unique:users',
    //     'password' => 'required|min:6'
    // ];
    public function render()
    {
        return view('livewire.auth.register');
    }

    public function register()
    {
        $this->validate([
            'name' => 'required|min:6',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ]);
        // dd($this->name);
    }

    public function changeValue($value)
    {
        dd($value);
    }

    public function updated($name)
    {
        $this->validateOnly($name, [
            'name' => 'required|min:6',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ]);
    }
}

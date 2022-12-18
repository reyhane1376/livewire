<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use GuzzleHttp\Psr7\Request;
use Livewire\Component;

class Register extends Component
{
    // public $name;
    // public $email;
    // public $password;

    protected $rules = [
        'user.name' => 'required|min:6',
        'user.email' => 'required|email|unique:users,email',
        'user.password' => 'required|min:6',
    ];

    public User $user;

    public function mount()
    {
        $this->user = new user();
    }
    public function render()
    {
        return view('livewire.auth.register');
    }

    public function register()
    {
        $this->validate();
        $this->user->password = bcrypt($this->user->password);
        return redirect()->route('home');
        // dd($this->user->save());
        // dd($this->user);
        // $this->user->save();
        // dd($this->name);
    }

    // public function changeValue($value)
    // {
    //     dd($value);
    // }

    public function updated($email)
    {
        $this->validateOnly($email);
    }
}

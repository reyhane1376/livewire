<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Log;
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
        Log::emergency("mount");
    }
    public function render()
    {
        log::emergency('render');
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

    public function hydrate()
    {
        log::emergency('hydrate');
    }

    public function dehydrate()
    {
        log::emergency('dehydrate');
    }

    // public function changeValue($value)
    // {
    //     dd($value);
    // }

    public function updated($email)
    {
        log::emergency('updated');
        $this->validateOnly($email);
    }
}

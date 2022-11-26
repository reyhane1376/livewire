<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Header extends Component
{
    // public function mount($article)
    // {
    //     dd($article);
    // }
    public $article;
    public function render()
    {
        // dd($this->article);
        return view('livewire.header');
    }
}

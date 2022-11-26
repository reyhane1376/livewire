<?php

namespace App\Http\Livewire\Articles;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $article = [
            'title' => 'title one'
        ];
        return view('livewire.articles.index', compact('article'));
    }
}

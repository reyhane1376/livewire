<?php

namespace App\Http\Livewire\Articles;

use Livewire\Component;

class Index extends Component
{
    // public $article;
    public function mount($article)
    {
        $this->article = $article;
    }
    public function render()
    {
        // $article = [
        //     'title' => 'title one'
        // ];
        // dd($this->article);
        return view('livewire.articles.index');
    }
}

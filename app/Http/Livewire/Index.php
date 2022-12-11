<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class Index extends Component
{

    public $foo;
    // public $bar;

    public function mount()
    {
        $this->foo = 1;
        // $this->bar = $this->foo + 1;
    }
    public function render()
    {
        $articles = Article::latest()->paginate(5);
        return view('livewire.index', compact('articles'));
    }

    public function increment()
    {
        $this->foo = $this->foo + 1;
    }

    public function getBarProperty()
    {
        return $this->foo + 1;
    }

    //     public function like()
    //     {
    //         dd('hi');
    //     }

    // public function likeArticle($id)
    // {
    //     $article = Article::find($id);
    //     $article->increment('like');
    // }
}

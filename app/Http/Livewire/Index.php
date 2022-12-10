<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $articles = Article::latest()->paginate(5);
        return view('livewire.index', compact('articles'));
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

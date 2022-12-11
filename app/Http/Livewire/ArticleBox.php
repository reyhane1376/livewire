<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticleBox extends Component
{
    public Article $article;
    public function render()
    {
        return view('livewire.article-box');
    }

    public function like()
    {
        dd('ji');
        $this->article->increment('like');
    }
}

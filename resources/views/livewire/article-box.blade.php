<h3>{{ $article->title }}</h3>
<p>{{ $article->body }}</p>
<div>
    like : {{ $article->like }}
    <button wire:click="like" class="btn btn-danger btn-sm">like</button>
</div>

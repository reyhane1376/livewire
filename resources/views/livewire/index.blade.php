<div class="container">
    <div class="row">
        <div class="col-12">
            <h3>Articles List</h3>
            @foreach($articles as $article)
            <h3>{{ $article->title }}</h3>
            <p>{{ $article->body }}</p>
            <div>
                like : {{ $article->like }}
                <button wire:click='likeArticle({{ $article->id }})' class="btn btn-danger btn-sm">like</button>
            </div>
            @endforeach
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h3>Articles List</h3>
            a: {{ $foo }}
            <br>
            b: {{ $this->bar }}
            <br>
            <button class="btn btn-sm btn-warning" wire:click='increment'>increment</button>
            {{-- @foreach($articles as $article)
            <livewire:article-box :article="$article">
                @endforeach --}}
        </div>
    </div>
</div>
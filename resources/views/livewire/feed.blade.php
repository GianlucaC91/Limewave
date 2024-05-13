<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div>
                <div class="col-12 col-lg-6 pt-5 ps-5">
                    <h2 class="display-6 fw-bold text-body-emphasis lh-1 mb-3 underline-colors">Annunci Recenti</h2>
                    <p class="lead">Più di 100 nuovi annunci ogni ora</p>
                </div>
                {{-- OLD FEED --}}
            </div>
            @foreach ($articles as $article)
                <div class="col-12 col-md-3">
                    {{-- @dd($articles) --}}
                    <div class="card rounded-0 shadow" style="width: 18rem;">
                        <p class="card-text">Venduto da {{ $article->user->name }}</p>
                        <img src="https://picsum.photos/20{{ $article->id }}" class="card-img-top rounded-0 "
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $article->title }}</h5>
                            <p class="card-text">Categoria: {{ $article->category->name }}</p>
                            <p class="card-text">{{ $article->price }} €</p>
                            <p class="card-text">{{ \Illuminate\Support\Str::limit($article->body, 20) }}</p>
                            <a href="{{ route('article.detail', compact('article')) }}"
                                class="btn btn-accent rounded-0 fw-bold shadow">Dettaglio</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>

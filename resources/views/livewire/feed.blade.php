<div class="container-fluid pt-md-5 hero">
    <div class="row justify-content-center ">
        <div class="col-12 col-md-11 col-xl-9">


<div class="container">
    <div class="row bg-white shadow justify-content-evenly ">        
        <div class="col-12 ps-5 pb-5 mt-5">
            <h2 class="display-6 fw-bold text-body-emphasis lh-1 mb-3 underline-colors">Annunci Recenti</h2>
            <p class="lead">Più di 100 nuovi annunci ogni ora</p>
        </div>
        {{-- OLD FEED --}}
        
        @foreach ($articles as $article)

        <div class="card col-3 rounded-4 shadow-sm mx-2 my-3" style="width: 18rem;">
            <p class="fw-bold d-flex align-items-center "> <a
                href="{{ route('user.profile', ['user' => $article->user]) }}"><img src="{{Storage::url($article->user->img)}}" class="card-img avatars "></a> {{ $article->user->name }}</p>
                <img src="https://picsum.photos/20{{ $article->id }}" class="card-img-top rounded-0 "
                alt="...">
                <div class="card-body h-75">
                    <h5 class="card-title">{{ Str::limit($article->title, 20)}}</h5>
                    <p class="card-text">Categoria: {{ $article->category->name }}</p>
                    <p class="card-text">Prezzo: {{ $article->price }} €</p>
                    <p class="card-text">{{ Str::limit($article->body, 50) }}</p>
                    <a href="{{ route('article.detail', compact('article')) }}"
                    class="btn btn-accent rounded-0 fw-bold shadow">Dettaglio</a>
                </div>
        </div>            
        @endforeach            
    </div>        
</div>
</div>
</div>
</div>


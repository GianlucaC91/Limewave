<x-layout>
<h1>risultati</h1>
@forelse ($articles as $article)
        
        <div class="card col-3 rounded-0 shadow-sm mx-2 my-3" style="width: 18rem;">
            <p class="pt-2 ps-3 fw-bold d-flex align-items-center "> <a
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
        @empty    
        <p>La ricerca non ha prodotto risultati</p>
        {{-- CHANGE WITH CATEGORY INDEX WHEN IMPLEMENTED --}}
        <p><a href="{{ route('homepage') }}">Sfoglia le cateorie></p>
        @endforelse  
</x-layout>

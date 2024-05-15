<x-layout>

    @forelse ($articles as $article)
                    
    <div class="card col-3 rounded-4 shadow-sm mx-2 my-3" style="width: 18rem;">
        <p class="fw-bold d-flex align-items-center mt-2"> <a
            href="{{ route('user.profile', ['user' => $article->user]) }}"><img src="{{Storage::url($article->user->img)}}" class="card-img avatars "></a> {{ $article->user->name }}</p>
            <img src="https://picsum.photos/20{{ $article->id }}" class="card-img-top rounded-3 my-0 img-card"
            alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ Str::limit($article->title, 20)}}</h5>
                <p class="card-text">Categoria: {{ $article->category->name }}</p>
                <p class="card-text">{{ Str::limit($article->body, 50) }}</p>
                <p class="card-text">Prezzo: {{ $article->price }} €</p>
                <div class="justify-content-between d-flex">
                    <a href="{{ route('article.detail', compact('article')) }}"
                    class="btn btn-accent rounded-3 fw-bold shadow">Dettaglio</a>
                        <span><i class="bi bi-suit-heart-fill fs-5 heart"></i></span>
                </div>
            </div>
        </div>   
        @empty 
        <div>NO!</div>         
        @endforelse     
        {{$articles->links()}}   

    
</x-layout>
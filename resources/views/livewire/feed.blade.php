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
                    @if ($article->is_accepted || $article->user->is_admin)
                    <div class="card col-3 rounded-4 shadow-sm mx-2 my-3" style="width: 18rem;">
                        <p class="fw-bold d-flex align-items-center mt-2"> <a
                            href="{{ route('user.profile', ['user' => $article->user]) }}"><img src="{{Storage::url($article->user->img)}}" class="card-img avatars "></a> {{ $article->user->name }}</p>
                            <div class="overflow-hidden rounded-3">
                                <img src="https://picsum.photos/20{{ $article->id }}" class="card-img-top rounded-3 my-0 img-card"
                                alt="...">
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">{{ Str::limit($article->title, 20)}}</h5>
                                <p class="card-text">Categoria: {{ $article->category->name }}</p>
                                <p class="card-text">{{ Str::limit($article->body, 50) }}</p>
                                <p class="card-text">Prezzo: {{ $article->price }} €</p>
                                <div class="justify-content-between d-flex">
                                    <a href="{{ route('article.detail', compact('article')) }}"
                                    class="btn btn-accent rounded-3 fw-bold shadow">Dettaglio</a>
                                        {{-- <span><i class="bi bi-suit-heart-fill fs-5 heart"></i></span> --}}
                                </div>
                            </div>
                        </div>       
                        @endif      
                        @endforeach            
                    </div>        
                </div>
            </div>
        </div>
    </div>
    
    
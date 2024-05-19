  
<div class="container-fluid pt-md-5 hero">
    <div class="row justify-content-center ">
        <div class="col-12 col-md-11 col-xl-9"> 
            
            <div class="container">
                <div class="row bg-white shadow justify-content-evenly ">        
                    <div class="col-12 ps-5 pb-5 mt-5">
                        <h2 class="display-6 fw-bold text-body-emphasis lh-1 mb-3 underline-colors">{{__("messages.RecentAnnouncements")}}</h2>
                        <p class="lead">{{__("messages.ads")}}</p>
                    </div>
                        <p class="fw-bold ms-4">{{__("messages.allArticles")}}</p>                
                    @foreach ($articles as $article)
                    @if ($article->is_accepted || $article->user->is_admin)
                    <div class="card col-3 rounded-4 shadow-sm mx-2 mt-2 mb-5 px-0" style="width: 18rem;">
                        <p class="pt-2 ps-3 fw-bold d-flex align-items-center"><a
                            href="{{ route('user.profile', ['user' => $article->user]) }}"><img src="{{Storage::url($article->user->img)}}" class="card-img avatars me-2 mt-2"></a>
                            <span class="mt-1 cardName"><a class="cardName"
                                href="{{ route('user.profile', ['user' => $article->user]) }}"> {{ $article->user->name }}</a>
                            </span>
                        </p>
                        {{-- Inserire carosello --}}
                        <div class="overflow-hidden">
                            <div id="carousel-{{ $article->id }}" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    @foreach ($article->images as $key => $image)
                                        <div class="carousel-item @if ($key == 0) active @endif">
                                            <img src="{{ $image->getUrl(600, 600) }}" class="d-block w-100" alt="...">
                                        </div>
                                    @endforeach
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carousel-{{ $article->id }}" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carousel-{{ $article->id }}" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">{{ Str::limit($article->title, 20)}}</h5>
                            <p class="card-text">{{__("messages.category")}}: {{__("messages." . $article->category->name) }}</p>
                            <p class="card-text">{{ Str::limit($article->body, 20) }}</p>
                        </div>
                        <div class="card-body">
                            <p class="card-text">{{__("messages.price")}}: {{ $article->price }} €</p>
                            <span class="mb-1"><a href="{{ route('article.detail', compact('article')) }}"
                            class="btn btn-accent rounded-0 fw-bold shadow">{{__("messages.details")}}</a></span>
                            @if(auth()->check() && (auth()->user()->is_revisor || auth()->user()->is_admin))
                            <span class="mb-1">
                                <button wire:click="undoApproval({{ $article->id }})" class="btn btn-s rounded-0 fw-bold shadow">Undo</button>
                            </span>
                            @endif
                        </div>
                    </div>
                    @endif      
                    @endforeach            
                </div>        
            </div>
        </div>
    </div>
</div>
    
    
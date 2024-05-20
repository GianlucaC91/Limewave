<x-layout>
    <div class="container-fluid pt-md-5 hero">
        <div class="row justify-content-center ">
            <div class="col-12 col-md-11 col-xl-9">

                <div class="container">
                    <div class="row bg-white shadow justify-content-evenly">
                        <div class="col-12 ps-5 pb-5 mt-5">
                            <h1 class="display-6 fw-bold text-body-emphasis lh-1 mb-3 underline-colors">
                                {{ __('messages.category') }}
                                {{ __('messages.' . $category->name) }}</h1>
                        </div>

                        @forelse ($category->acceptedArticles as $article)
                        <div class="col-3 card rounded-4 shadow-sm mx-2 mt-2 mb-5 px-0" style="width: 18rem;">
                            <p class="pt-2 ps-3 fw-bold d-flex align-items-center">
                                <a href="{{ route('user.profile', ['user' => $article->user]) }}">
                                    <img src="{{ Storage::url($article->user->img) }}" class="card-img avatars me-2 mt-2">
                                </a>
                                <span class="mt-1 cardName">
                                    <a class="cardName" href="{{ route('user.profile', ['user' => $article->user]) }}">
                                        {{ $article->user->name }}
                                    </a>
                                </span>
                            </p>
                            <div class="overflow-hidden">
                                @if($article->images->isNotEmpty())
                                    <img src="{{ $article->images->first()->getUrl(286,286) }}" class="card-img-top divImg rounded-0" alt="...">
                                @else
                                <img src="../media/logo2024.png" class="card-img-top divImg rounded-0 w-100" alt="...">
                                
                                @endif
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{ Str::limit($article->title, 20) }}</h5>
                                <p class="card-text">Creato il: {{ $article->created_at->format('d/m/Y') }}</p>
                            </div>
                            <div class="card-body">
                                <p class="card-text h5">{{ __("messages.price") }}: {{ $article->price }}€</p>
                                <a href="{{ route('article.detail', compact('article')) }}" class="btn btn-accent rounded-0 fw-bold shadow mb-1">
                                    {{ __("messages.details") }}
                                </a>
                            </div>
                        </div>
                    @empty
                        <p>{{ __("messages.noAds") }}</p>
                        <p><a href="{{ route('article.create') }}">{{ __("messages.postOne") }}</a></p>
                    @endforelse

                    </div>
                </div>

            </div>
        </div>
    </div>

</x-layout>

<x-layout>
    
      {{-- PLACEHOLDER CAROUSEL, final carousel will be a swiper carousel, once got how to implement in laravel --}}
      
      {{-- PAGE TITLE IS CONTEXTUAL --}}
      @section('title', $article->title)

      {{-- ARTICLE PAGE --}}
      <div class="container-fluid pt-5 ">        
          <div class="row justify-content-center ">

            <div class="col-12 col-md-9 ">
                <div class="container-fluid shadow">
                    <div class="row bg-white justify-content-between ">
                        {{-- div per il testo a sinistra --}}
                        <div class="col-12 col-md-6 px-5 py-4 order-2 order-md-1 d-flex flex-column justify-content-between">
                            <div>
                                    {{-- ARTICLE TITLE --}}
                                <h1 class="display-6 fw-bold">{{$article->title}}</h1>
                                <h4 class="lead mt-2">{{__("messages.category")}}: {{__("messages." . $article->category->name) }}</h4>
                                    {{-- ARTICLE USER --}}
                                <h3 class="fs-4 mt-3">{{__("messages.postedBy")}}
                                {{$article->user->name}}</h3>
                                    {{-- ARTICLE BODY --}}
                                <p class="lead">{{$article->body}}</p>
                            </div>
                            <h3>{{__("messages.price")}} {{$article->price}}€</h3>
                        </div>
                            {{-- CAROUSEL a destra--}}
                        <div class="col-12 col-md-6 d-flex align-items-center justify-content-end order-1 order-md-2">
                          <div id="carouselExampleIndicators" class="detailCarousel carousel slide w-100">
                            <div class="carousel-indicators">
                                @foreach($article->images as $index => $image)
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $index }}" class="{{ $index === 0 ? 'active' : '' }}" aria-current="{{ $index === 0 ? 'true' : 'false' }}" aria-label="Slide {{ $index + 1 }}"></button>
                                @endforeach
                            </div>
                            <div class="carousel-inner">
                                @forelse($article->images as $index => $image)
                                    <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                        <img src="{{ $image->getCropUrl(720, 720) }}" class="d-block w-100" alt="...">
                                    </div>
                                @empty
                                    <div class="carousel-item active">
                                        <img src="/media/logo2024.png" class="d-block w-100" alt="...">
                                    </div>
                                @endforelse
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="visually-hidden">{{ __("messages.previous") }}</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="visually-hidden">{{ __("messages.next") }}</span>
                            </button>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

          </div>
      </div>

</x-layout>

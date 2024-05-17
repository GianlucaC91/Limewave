<x-layout>
    
      {{-- PLACEHOLDER CAROUSEL, final carousel will be a swiper carousel, once got how to implement in laravel --}}
      
      {{-- PAGE TITLE IS CONTEXTUAL --}}
      @section('title', $article->title)

      {{-- ARTICLE PAGE --}}
      <div class="container-fluid pt-5 ">        
          <div class="row justify-content-center ">

            <div class="col-12 col-md-11 ">
                <div class="container-fluid shadow">
                    <div class="row bg-white justify-content-between ">
                        {{-- div per il testo a sinistra --}}
                        <div class="col-12 col-md-6 px-5 py-4 order-2 order-md-1">
                                {{-- ARTICLE TITLE --}}
                            <h1 class="display-6 fw-bold">{{$article->title}}</h1>
                                {{-- ARTICLE USER --}}
                            <h3 class="fs-4 ">{{__("messages.postedBy")}}
                              {{$article->user->name}}</h3>
                                {{-- ARTICLE BODY --}}
                            <p class="lead">{{$article->body}} {{$article->body}}{{$article->body}} {{$article->body}} {{$article->body}} {{$article->body}}{{$article->body}} {{$article->body}}</p>
                        </div>
                            {{-- CAROUSEL a destra--}}
                        <div class="col-12 col-md-6 d-flex align-items-center justify-content-end order-1 order-md-2">
                            <div id="carouselExampleIndicators" class="detailCarousel carousel slide w-100">
                                <div class="carousel-indicators">
                                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                      <img src="https://picsum.photos/300/200" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                      <img src="https://picsum.photos/300/201" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                      <img src="https://picsum.photos/300/202" class="d-block w-100" alt="...">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

          </div>
      </div>

</x-layout>

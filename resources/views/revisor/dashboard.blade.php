<x-layout>
    {{-- <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <h1>{{ $article_to_check ? "Ecco l'annuncio da revisionare" : 'Congratulazioni! Non ci sono annunci da revisionare' }}
                </h1>
            </div>
        </div>
    </div>
    @if ($article_to_check)
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <div id="carouselExampleIndicators" class="detailCarousel carousel slide w-100">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
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
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <h5 class="card-title">Titolo: {{$article_to_check->title}}</h5>
        <p class="card-text">Descrizione: {{$article_to_check->body}}</p>
        <p class="card-footer">Pubblicato il: {{$article_to_check->created_at->format("H:m d/m/Y")}}</p>
    </div>
    <div class="row">
        <div class="col-12 col-md-6">
            <form action="{{ route('revisor.accept', ['article' => $article_to_check]) }}"
                method="POST">
                @csrf
                @method('PATCH')
                <button type="submit" class="btn btn-accent">Accetta</button>
            </form>
        </div>
        <div class="col-12 col-md-6 text-end">
            <form action="{{ route('revisor.reject', ['article' => $article_to_check]) }}"
                method="POST">
                @csrf
                @method('PATCH')
                <button type="submit" class="btn btn-danger">Rifiuta</button>
            </form>
        </div>
    </div>
</div>
</div>
@endif --}}
{{-- @dd($article_to_check) --}}
<livewire:revise/>
</x-layout>

<x-layout>
    <div class="container-fluid pt-md-5 hero">
        <div class="row justify-content-center ">
            <div class="col-12 col-md-11 col-xl-9">

                <div class="container">
                    <div class="row bg-white shadow justify-content-evenly">
                        <div class="col-12 ps-5 pb-5 mt-5">
                            <h1 class="display-6 fw-bold text-body-emphasis lh-1 mb-3 underline-colors">Categoria {{ $category->name }}</h1>
                        </div>

                        @forelse ($category->articles as $article)
                            <div class="col-3 my-5">
                                <div class="card" style="width: 18rem;">
                                    <img src="https://picsum.photos/20{{ $article->id }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $article->title }}</h5>
                                        <p class="card-text">Creato da: {{ $article->user->name ?? '' }}</p>
                                        <p class="card-text">Creato il: {{ $article->created_at->format('d/m/Y') }}</p>
                                        <p class="card-text">Prezzo: {{ $article->price }}</p>
                                        <a href="{{ route('article.detail', compact('article')) }}"
                                            class="btn btn-primary">Dettagli</a>
                                    </div>
                                </div>
                            </div>
                        @empty

                            <p>Non sono presenti annunci in questa categoria</p>
                            <p><a href="{{ route('article.create') }}">Pubblicane uno</a></p>
                            
                        @endforelse

                    </div>
                </div>

            </div>
        </div>
    </div>

</x-layout>

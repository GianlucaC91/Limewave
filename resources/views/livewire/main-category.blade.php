<div>

    <div class="container-fluid rowMainCategories my-5 position-relative">
        <div class="blur-background"></div>
        <div class="row position-relative">
            @foreach ($categories as $category)
            <div class="col-6 col-md-3 my-5 d-flex justify-content-center">
                <div class="card shadow rounded-4 my-2 my-md-5 category-card" style="width: 20rem;">
                    <div class="card-body p-0">
                        <a class="text-s fw-bold fs-3 text-decoration-none" href="{{ route('categoryShow', compact('category')) }}">
                            @if($category->name == 'Immobili')
                            <img src="{{ asset('storage/categoryLogos/real-estate.png') }}" class="w-100" alt="Real Estate">
                            @elseif($category->name == 'Elettronica')
                            <img src="{{ asset('storage/categoryLogos/electronics.png') }}" class="w-100" alt="electronics">
                            @elseif($category->name == 'Veicoli')
                            <img src="{{ asset('storage/categoryLogos/vehicles.png') }}" class="w-100" alt="vehicles">
                            @elseif($category->name == 'Casa e Giardino')
                            <img src="{{ asset('storage/categoryLogos/home-and-garden.png') }}" class="w-100" alt="home-and-garden">
                            @elseif($category->name == 'Lavori')
                            <img src="{{ asset('storage/categoryLogos/jobs.png') }}" class="w-100" alt="jobs">
                            @elseif($category->name == 'Servizi')
                            <img src="{{ asset('storage/categoryLogos/services.png') }}" class="w-100" alt="services">
                            @elseif($category->name == 'Moda e Bellezza')
                            <img src="{{ asset('storage/categoryLogos/fashion-and-beauty.png') }}" class="w-100" alt="fashion-and-beauty">
                            @elseif($category->name == 'Sport e Tempo Libero')
                            <img src="{{ asset('storage/categoryLogos/sports-and-leisure.png') }}" class="w-100" alt="sports-and-leisure">
                            @elseif($category->name == 'Libri e Cinema')
                            <img src="{{ asset('storage/categoryLogos/books-and-movies.png') }}" class="w-100" alt="books-and-movies">
                            @elseif($category->name == 'Animali Domestici')
                            <img src="{{ asset('storage/categoryLogos/pets.png') }}" class="w-100" alt="pets">
                            @endif
                            <div class="text-center py-3 category-text">
                                {{__("messages." . $category->name) }}
                            </div>
                        </a>
                        {{-- <h5 class="card-title">Card title</h5> --}}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    
</div>

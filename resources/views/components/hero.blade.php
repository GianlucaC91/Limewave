
<div class="container-fluid pt-md-5 hero">
    <div class="row justify-content-center ">
        <div class="col-12 col-md-11 col-xl-9">
            {{-- DESKTOP SECTION --}}
            <div class="container-fluid shadow d-none d-md-block">
                <div class="row bg-white overflow-hidden">
                    <div class="col-12 col-md-6 order-1 position-relative">
                        <img src="./media/hero-image.png" class="heroImg position-absolute bottom-0 " loading="lazy">
                    </div>
                    <div class="col-12 col-md-6 p-5">
                        <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3 underline-colors">LimeWave desktop</h1>
                        <p class="lead mt-2">È arrivato il momento di liberare casa da quello che non usi più! Oppure compra di seconda mano per rispettare un favore all'ambiente.</p>
                        <p class="lead fs-3">Comincia subito a fare affari!</p>
                        <div class="d-grid gap-3 d-md-flex justify-content-md-start">
                            @guest
                            <a href="{{ route('register') }}" class="btn btn-accent btn-hero btn-lg fw-bold pt-3 shadow ">Registrati</a>
                            <a href="{{ route('login') }}" class="btn btn-s btn-lg fw-bold pt-3 px-4 shadow btn-hero-login">Accedi</a>
                            @endguest
                            
                            @auth
                            <a href="{{ route('article.create') }}" class="btn btn-accent btn-hero btn-lg fw-bold pt-3 shadow">Carica un annuncio</a>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>

            {{-- MOBILE SECTION --}}
            <div class="container-fluid shadow d-block d-md-none">
                <div class=" row align-items-center bg-white">
                    <div class="col-12 pt-5">
                        <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">LimeWave mobile</h1>
                        <p class="lead">È arrivato il momento di liberare casa da quello che non usi più! Oppure compra di seconda mano per rispettare un favore all'ambiente! Comincia subito a fare affari!</p>
                    </div>
                    <div class="hero-mobile d-flex align-items-end ">
                        <div class="d-grid gap-2 mb-3 d-md-flex justify-content-md-start">
                            @guest
                            <a href="{{ route('register') }}" class="btn btn-accent btn-hero btn-lg fw-bold pt-3 shadow ">Registrati</a>
                            <a href="{{ route('login') }}" class="btn btn-s btn-lg fw-bold pt-3 px-4 shadow btn-hero-login">Accedi</a>
                            @endguest
                            
                            @auth
                            <button type="button" class="btn btn-accent btn-hero"><a href="{{ route('article.create') }}" class="btn btn btn-accent btn-lg px-4 fw-bold">Carica un annuncio</a></button>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

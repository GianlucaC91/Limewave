<header class="masthead">
    <div class="container h-75">
        <div class="row h-100 align-items-center">
            <div class="col-12 text-center">
                <h1 class="fw-light">Vertically Centered Masthead Content</h1>
                <p class="lead">A great starter layout for a landing page</p>
                @guest
                <a href="{{ route('login') }}" class="btn btn-info">Accedi</a>
                <a href="{{ route('register') }}" class="btn btn-success">Registrati</a>
                @endguest
                @auth
                    <button class="btn btn-primary text-white">
                        <a class="text-white" style="text-decoration: none;" href="{{route("article.create")}}">Inserisci annuncio</a> 
                    </button>
                @endauth
            </div>
        </div>
    </div>
</header>

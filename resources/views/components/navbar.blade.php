<nav class="navbar navbar-expand-lg bg-s text-p">
    <div class="container-fluid w-100">
        <div class="row w-100 m-0">
            <div class="col-12 d-flex justify-content-between">
                <a class="navbar-brand text-a" href="{{ route('homepage') }}">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link text-p" aria-current="page" href="{{ route('homepage') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-p" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-p" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item text-p" href="#">Action</a></li>
                                <li><a class="dropdown-item text-p" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item text-p" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                   
                    <div class="collapse navbar-collapse d-flex">
                        <div class="ms-auto">
                            <a class="nav-link dropdown-toggle text-p" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    @auth
                                    <i class="bi bi-person-circle text-a f"></i>
                                    @endauth
                                        
                                       @guest
                                       <i class="bi bi-person"></i>
                                       @endguest
    
                                </a>
                            <ul class="dropdown-menu bg-s">
                                @guest
                                    <li><a class="dropdown-item text-p" href="{{ route('login') }}">Accedi</a></li>
                                    <li><a class="dropdown-item text-p" href="{{ route('register') }}">Registrati</a></li>
                                @endguest
                                @auth
                                <li><form class="dropdown-item" method="POST" action="{{route("logout")}}">
                                    @csrf 
                                    <button class="nav-link btn btn-primary">
                                        Logout
                                        </button>
                                </form></li>
                                @endauth
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>

                        </div>
                    </div>
               
            </div>
        </div>
        <div class="col-12 d-flex">
            <form class="d-flex w-100" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-custom" type="submit">Search</button>
              </form>
        </div>
        </div>
    </div>
</nav>

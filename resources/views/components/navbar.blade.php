<nav class="navbar navbar-expand-lg bg-s text-p shadow-sm">
    <div class="container-fluid w-100">
        <div class="row w-100 m-0">
            <div class="col-12 d-flex justify-content-between">
                <a class="navbar-brand text-a" href="{{ route('homepage') }}">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link link-custom text-p" aria-current="page" href="{{ route('homepage') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-custom text-p" href="#">Link</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link link-custom dropdown-toggle text-p" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu bg-s">
                                <li><a class="dropdown-item text-p dropdown" href="#">Action</a></li>
                                <li><a class="dropdown-item text-p dropdown" href="#">Another action</a></li>
                                {{-- <li>
                                    <hr class="dropdown-divider tetx-p">
                                </li> --}}
                                <li><a class="dropdown-item text-p dropdown" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                   
                    <div class="collapse navbar-collapse d-flex">
                        <div class="ms-auto">
                            <a class="nav-link dropdown-toggle text-p" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            
                            @auth
                            {{-- <div class="d-flex">
                                <p class="text-p mx-4"> Ciao, {{Auth::user()->name}}</p>
                            </div> --}}
                            <i class="bi bi-person-circle text-a fs-5"></i>
                                    @endauth
                                        
                                       @guest
                                       <i class="bi bi-person text-a fs-5"></i>
                                       {{-- <button type="button" class="btn btn-primary">Primary</button>
                                       <button type="button" class="btn btn-outline-primary">Primary</button> --}}
                                       {{-- <li class="btn btn-custom-login"><a class="dropdown-item text-a" href="{{ route('login') }}">Accedi</a></li >
                                       <li class="btn btn-custom-register"><a class="dropdown-item text-s" href="{{ route('register') }}">Registrati</a></li > --}}
                                       @endguest
    
                                </a>
                            {{-- <ul class="dropdown-menu bg-s"> --}}
                                @guest
                                <div class="dropdown-center">
                                    {{-- <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                      Centered dropdown
                                    </button> --}}
                                    <ul class="dropdown-menu me-5">
                                        <li><a class="dropdown-item text-p dropdown" href="{{ route('login') }}">Accedi</a></li>
                                        <li><a class="dropdown-item text-p dropdown" href="{{ route('register') }}">Registrati</a></li>
                                   
                                    
                                @endguest
                                @auth
                                <li><form class="dropdown-item dropdown" method="POST" action="{{route("logout")}}">
                                    @csrf 
                                    <button class="nav-link btn bg-s text-p">
                                        Logout
                                        </button>
                                </form></li>
                                @endauth
                            </ul>
                        </div>
                                {{-- <li>
                                    <hr class="dropdown-divider">
                                </li> --}}
                                {{-- <li><a class="dropdown-item dropdown text-p" href="#">Something else here</a></li> --}}
                            </ul>

                        </div>
                    </div>
               
            </div>
        </div>
        <div class="col-12 d-flex">
            <form class="d-flex w-100" role="search">
                <input class="form-control me-2 mt-3" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-accent mt-3" type="submit">Search</button>
              </form>
        </div>
        </div>
    </div>
</nav>
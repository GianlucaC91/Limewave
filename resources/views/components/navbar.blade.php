@php
    use App\Models\Article;
    @endphp
<nav class="navbar fixed-top navbar-expand-lg bg-s text-p shadow-sm pb-3">
    <div class="container-fluid w-100">
        <div class="row w-100  m-0">
            <div class="col-12 d-flex justify-content-between">
                <a class="navbar-brand link-custom text-a mt-1" href="{{ route('homepage') }}">Limewave</a>
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasExample" aria-controls="offcanvasExample" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="bi bi-list-nested fs-1 text-a"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    {{-- NAVBAR NAV LINKS --}}
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link text-p link-custom" aria-current="page"
                                href="{{ route('homepage') }}">Home</a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link text-p link-custom" href="#">Link</a>
                        </li> --}}
                        {{-- CATEGORY DROPDOWN --}}
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-p link-custom" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Categorie
                            </a>
                            <ul class="dropdown-menu rounded-0 shadow">
                                <livewire:category-counter/>
                            </ul>
                        </li>
                    </ul>
                    {{-- SEARCHBAR --}}
                    {{-- <form class="d-flex w-50 ms-4 mt-1" role="search">
                        <input class="form-control me-2 border-0 rounded-4" type="search" placeholder="Cerca qui..." aria-label="Search">
                        <button class="btn btn-accent border-0 rounded-4" type="submit"> <i class="bi bi-search"></i></button>
                    </form> --}}

                    {{-- SEARCHBAR ALTERNATIVA --}}
                    <form action="{{route("articles.search")}}" method="GET" class="d-flex mt-3 w-50 mx-4 me-auto" role="search" type="search">
                        <input name="searched" class="form-control rounded-0  border-0" type="search" placeholder="Cerca qui..." aria-label="Search">
                        <button class="btn btn-accent border-0 rounded-0" type="submit"><i class="bi bi-search"></i></button>
                    </form>                   

                    {{-- NAVBAR USER AND LANG PANEL --}}
                    <div class="collapse navbar-collapse d-flex">
                        {{-- LANG PANEL --}}
                        <div class="ms-auto dropdown">
                           
                        </div>
                        {{-- USER PANEL --}}
                        <div class="ms-auto dropdown">
                            {{-- USER ICONS AND PROPIC --}}
                            <a class="nav-link dropdown-toggle text-p" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                @auth
                                {{-- WHEN IMPLEMENTED, PROPIC HERE (IF NULL, CURRENT ICON OR DEFAULT PROPIC) --}}
                                <i class="bi bi-person-circle text-a fs-5"></i>
                                @endauth
                                @guest
                                    <i class="bi bi-person text-a"></i>
                                @endguest
                            </a>
                                {{-- USER LOGIN AND LOGOUT --}}
                            <ul class="dropdown-menu dropdown-menu-end  bg-white  rounded-0 shadow">
                                @guest
                                    <li><a class="dropdown-item text-s" href="{{ route('login') }}"><i class="bi bi-box-arrow-in-right"></i> Accedi</a></li>
                                    <li><a class="dropdown-item text-s" href="{{ route('register') }}"><i class="bi bi-plus"></i> Registrati</a></li>
                                @endguest
                                @auth
                                    {{-- PROFILE PAGE --}}
                                    
                                    <li>
                                        <a class="dropdown-item" href="{{route('profile')}}"><i class="bi bi-person-bounding-box"></i> Profilo</a>
                                    </li>
                                    @if(Auth::user()->is_revisor || Auth::user()->is_admin)
                                    <li>
                                        <a class="dropdown-item" href="{{route("revisor.dashboard")}}"><i class="bi bi-speedometer2"></i> Dashboard</a>
                                        <span>{{Article::reviseNotification()}}</span>
                                    </li>
                                    @endif
                                    <li>
                                        <a class="dropdown-item" href="{{ route('article.create') }}"><i class="bi bi-megaphone"></i> Nuovo Annuncio</a>
                                    </li>

                                    <li>
                                        <hr class="dropdown-divider mx-3">
                                    </li>

                                    <li>
                                        <form class="dropdown-item" method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button class="nav-link btn bg-white">
                                                <i class="bi bi-box-arrow-in-left text-danger"></i> Logout
                                            </button>
                                        </form>
                                    </li>
                                @endauth
                            </ul>
                        </div>
                    </div>
                                   
                </div>
            </div>
        </div>
    </div>
</nav>

{{-- OFFCANVAS --}}
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header bg-s">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel"><img src="..." alt="logo"></h5>
        <button type="button" class="btn btn-s ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"><i
                class="bi bi-x-lg text-a fs-2"></i></button>
    </div>
    <div class="offcanvas-body bg-s">

        {{-- NAVBAR NAV LINKS --}}
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link text-p" aria-current="page" href="{{ route('homepage') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-p" href="#">Link</a>
            </li>

            {{-- CATEGORY DROPDOWN --}}
            <li class="nav-item dropdown border-0">

                    <div class="accordion accordion-flush border-0" id="accordionExample">
                        <div class="accordion-item border-0">
                          <h2 id="accordionH2" class="accordion-header bg-s border-0 ">
                            <button class="accordion-button border-0 collapsed text-p bg-s ps-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                              Categorie
                            </button>
                          </h2>
                          <div id="flush-collapseOne" class="accordion-collapse border-0 collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body border-0 bg-s text-p">
                                <ul class="list-unstyled">
                                    @foreach ($categories as $category)
                                        <li><a class="dropdown-item mb-2 d-flex justify-content-between "
                                                href="{{ route('categoryShow', compact('category')) }}"><span class="badge rounded-pill bg-a text-s me-4 fs-6 my-2 py-2">{{ $category->articles->count() }} {{ $category->name }} </span></a></li>
                                    @endforeach
                                </ul>
                            </div>
                          </div>
                        </div>
                    
                    
                    </div>



            </li>
        </ul>

        {{-- REGISTER|LOGIN --}}
        @guest
            <div class="dropdown mt-3">
                <a class="nav-link dropdown-toggle text-p" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false"><i class="bi bi-person text-a"></i></i></a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item text-s" href="{{ route('login') }}">Accedi</a></li>
                    <li><a class="dropdown-item text-s" href="{{ route('register') }}">Registrati</a></li>
                </ul>
            </div>
        @endguest

        {{-- LOGOUT --}}
        @auth
            <div class="dropdown mt-3">
                <a class="nav-link dropdown-toggle text-p" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false"><i class="bi bi-person-circle text-a f"></i></a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="dropdown-item" href="#">Profilo</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">Dashboard</a>
                    </li>
                    <li>
                        <hr class="dropdown-divider mx-3">
                    </li>
                    <li>
                        <form class="dropdown-item" method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="nav-link btn bg-white">
                                Logout
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        @endauth

        {{-- SEARCHBAR --}}
        <div class="col-12 d-flex mt-3 justify-content-center">
            <form class="d-flex w-100" role="search">
                <input class="form-control me-2 rounded-4 border-0" type="search" placeholder="Cerca qui..."
                    aria-label="Search">
                <button class="btn btn-accent rounded-4 border-0" type="submit"><i
                        class="bi bi-search"></i></button>
            </form>
        </div>
    </div>
</div>

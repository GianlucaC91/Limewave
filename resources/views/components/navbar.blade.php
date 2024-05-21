@php
use App\Models\Article;
use App\Models\User;
@endphp
<nav class="navbar fixed-top navbar-expand-lg bg-s text-p shadow-sm">
    <div class="container-fluid w-100 ps-0 pe-0">
        <div class="row w-100  m-0">
            <div class="col-12 d-flex justify-content-between">
                <a class="navbar-brand limewaveTitle text-a mt-2" href="{{ route('homepage') }}"><img src="/media/logo2024.png" style="width: 60px;" alt="">Limewave</a>
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasExample" aria-controls="offcanvasExample" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="bi bi-list-nested fs-1 text-a"></i>
                </button>
                <div class="collapse navbar-collapse row pe-md-3 pe-0" id="navbarSupportedContent">
                    {{-- NAVBAR NAV LINKS --}}
                    <div class="col-3">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link text-p link-custom" aria-current="page"
                                href="{{ route('homepage') }}">Home</a>
                            </li>
                            {{-- CATEGORY DROPDOWN --}}
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-p link-custom" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                {{__("messages.categories")}}
    
                                </a>
                                <ul class="dropdown-menu shadow bg-s">
                                    <livewire:category-counter/>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    {{-- SEARCHBAR --}}
          
                    <div class="col-6">
                        <form action="{{route("article.search")}}" method="GET" class="d-flex mt-3 ms-5 mb-2" role="search" type="search">
                        <input id="navbarSearchbar" name="searched" class="form-control rounded-0  border-0" type="search" placeholder="{{__("messages.search")}}" aria-label="Search">
                        <button class="btn btn-accent border-0 rounded-0" type="submit"><i class="bi bi-search"></i></button>
                    </form>                   
                    </div>
                    
                    
                    {{-- NAVBAR USER AND LANG PANEL --}}
                    <div class="col-3">
                        <div class="collapse navbar-collapse d-flex">

                        {{-- LANG PANEL --}}
                        <div class="dropdown ms-auto mx-4">
                            <a class="nav-link dropdown-toggle text-p" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-translate text-a"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end bg-s">
                                <li class="link-custom">
                                    <x-_locale lang="IT" ></x-_locale> 
                                </li>
                                <li class="link-custom">
                                    <x-_locale lang="EN"></x-_locale> 
                                </li>
                                <li class="link-custom">
                                    <x-_locale lang="ES"></x-_locale> 
                                </li>
                            
                            </ul>
                        </div>
         
                            {{-- USER PANEL --}}
                            <div class=" dropdown">
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
                                <ul class="dropdown-menu dropdown-menu-end bg-s shadow">
                                    @guest
                                    <li><a class="dropdown-item text-p link-custom" href="{{ route('login') }}"><i class="bi bi-box-arrow-in-right"></i> {{__("messages.login")}}
                                    </a></li>
                                    <li><a class="dropdown-item text-p link-custom" href="{{ route('register') }}"><i class="bi bi-plus"></i> {{__("messages.register")}}
                                    </a></li>
                                    @endguest
                                    @auth
                                    {{-- PROFILE PAGE --}}
                                    
                                    <li>
                                        <a class="dropdown-item text-p link-custom" href="{{route('profile')}}"><i class="bi bi-person-bounding-box"></i> {{__("messages.profile")}}
                                        </a>
                                    </li>
                                    @if(Auth::user()->is_revisor || Auth::user()->is_admin)
                                    <li class="d-flex">
                                        <a class="dropdown-item text-p link-custom" href="{{route("revisor.dashboard")}}"><i class="bi bi-speedometer2"></i> Dashboard</a>
                                        <span class="text-s mx-2 badge rounded-pill bg-a pt-2">{{Article::reviseNotification()}}</span>
                                    </li>
                                    @endif
                                    <li class="d-flex">
                                        <a class="dropdown-item text-p link-custom" href="{{route("revisor.candidates")}}">
                                            <i class="bi bi-person-check"></i> Candidati
                                        </a>
                                        <span class="text-s mx-2 badge rounded-pill bg-a pt-2">
                                            {{User::countPendingRevisors()}}
                                        </span>
                                    </li>
                                    <li>
                                        <a class="dropdown-item text-p link-custom" href="{{ route('article.create') }}"><i class="bi bi-megaphone"></i> {{__("messages.newAnnouncement")}}</a>
                                    </li>
                                    
                                    <li>
                                        <hr class="dropdown-divider mx-5 mt-3 mb-2 bg-p">
                                    </li>
                                    
                                    <li>
                                        <form class="dropdown-item link-custom pe-0" method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button class="nav-link btn text-p pe-4 w-100 text-start">
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
    </div>
</nav>

{{-- OFFCANVAS --}}
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header bg-s">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel"><img style="width: 50px;" src="/media/logo2024.png" alt="logo"></h5>
        <button type="button" class="btn btn-s ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"><i
            class="bi bi-x-lg text-a fs-2"></i>
        </button>
    </div>
    <div class="offcanvas-body bg-s">
        
        {{-- NAVBAR NAV LINKS --}}
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link text-p" aria-current="page" href="{{ route('homepage') }}">Home</a>
            </li>

            
            {{-- CATEGORY DROPDOWN --}}
            <li class="nav-item dropdown border-0">
                
                <div class="accordion accordion-flush border-0" id="accordionExample">
                    <div class="accordion-item border-0">
                        <h2 id="accordionH2" class="accordion-header bg-s border-0 ">
                            <button class="accordion-button border-0 collapsed text-p bg-s ps-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                {{__("messages.categories")}}

                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse border-0 collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body border-0 bg-s text-p">
                                <ul class="list-unstyled">
                                    @foreach ($categories as $category)
                                    <li><a class="dropdown-item mb-2 d-flex justify-content-between "
                                        href="{{ route('categoryShow', compact('category')) }}"><span class="badge rounded-pill bg-a text-s me-4 fs-6 my-2 py-2">{{ $category->articles->count() }} {{ $category->name }} </span></a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                        
                        
                </div>
                    
                    {{-- dropdown-item text-p link-custom  --}}
                    
            </li>
        </ul>
            
        {{-- REGISTER|LOGIN --}}
        @guest

        {{-- prova accordion  --}}

        <div class="accordion accordion-flush border-0" id="accordionLoginRegister">
            <div class="accordion-item border-0">
                <h2 id="accordionH2LoginRegister" class="accordion-header bg-s border-0 ">
                    <button class="accordion-button accordionLoginRegister-button border-0 collapsed text-p bg-s ps-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        <i class="bi bi-person text-a fs-5"></i>
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse border-0 collapse" data-bs-parent="#accordionLoginRegister">
                    <div class="accordion-body border-0 bg-s text-p px-0">

                        <ul class="bg-s list-unstyled">
                            <li class="py-2"><a class="text-p text-decoration-none " href="{{ route('login') }}">{{__("messages.login")}}
                            </a></li>
                            <li class="py-2"><a class="text-p text-decoration-none " href="{{ route('register') }}">{{__("messages.register")}}
                            </a></li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>

        {{-- fine prova accordion  --}}

        {{-- <div class="dropdown mt-3">
            <a class="nav-link dropdown-toggle text-p" href="#" role="button" data-bs-toggle="dropdown"
            aria-expanded="false"><i class="bi bi-person text-a"></i></i></a>
            <ul class="dropdown-menu bg-s">
                <li><a class="dropdown-item text-p link-custom" href="{{ route('login') }}">Accedi</a></li>
                <li><a class="dropdown-item text-p link-custom" href="{{ route('register') }}">Registrati</a></li>
            </ul>
        </div> --}}
        @endguest
        
        {{-- LOGOUT --}}
        @auth
        
        <div class="accordion accordion-flush border-0" id="accordionLoginRegister">
            <div class="accordion-item border-0">
                <h2 id="accordionH2LoginRegister" class="accordion-header bg-s border-0 ">
                    <button class="accordion-button accordionLoginRegister-button border-0 collapsed text-p bg-s ps-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        <i class="bi bi-person text-a fs-5"></i>
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse border-0 collapse" data-bs-parent="#accordionLoginRegister">
                    <div class="accordion-body border-0 bg-s text-p px-0">

                        <ul class="bg-s list-unstyled">
                            <li class="py-2"><a class="text-p text-decoration-none " href="{{route('profile')}}">{{__("messages.profile")}}
                            </a></li>
                            <li class="py-2"><a class="text-p text-decoration-none " href="{{route("revisor.dashboard")}}">Dashboard</a></li>
                            <form class="" method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button class="btn accordionLogoutBtn text-p bg-s border-none px-0">
                                    Logout
                                </button>
                            </form>
                        </ul>

                    </div>
                </div>
            </div>
        </div>

        @endauth

        {{-- ACCORDION LANGAUGES --}}
        <div class="accordion accordion-flush border-0" id="accordionLanguages">
            <div class="accordion-item border-0">
                <h2 id="accordionH2Languages" class="accordion-header bg-s border-0 ">
                    <button class="accordion-button accordionLanguages-button border-0 collapsed text-p bg-s ps-0 mt-2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        <i class="bi bi-translate text-a"></i>
                    </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse border-0 collapse" data-bs-parent="#accordionLanguages">
                    <div class="accordion-body border-0 bg-s text-p px-0">
                        <ul class="bg-s list-unstyled">
                            <li>
                                <x-_locale lang="en"></x-_locale> 
                            </li>
                            <li>
                                <x-_locale lang="it"></x-_locale> 
                            </li>
                            <li>
                                <x-_locale lang="es"></x-_locale> 
                            </li>       
                        </ul>
                    </div>
                </div>
            </div>
        </div>
                            




        {{-- <div class="dropdown ms-auto mx-4">
            <a class="nav-link dropdown-toggle text-p" href="#" role="button"
            data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-translate text-a"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-end bg-s">
                <li class="link-custom">
                    <x-_locale lang="en"></x-_locale> 
                </li>
                <li class="link-custom">
                    <x-_locale lang="it"></x-_locale> 
                </li>
                <li class="link-custom">
                    <x-_locale lang="es"></x-_locale> 
                </li>
             
            </ul>
        </div> --}}
        {{-- FINE ACCORDION LANGAUGES --}}

        {{-- href="{{route('profile')}}">Profilo</a>  --}}
        {{-- href="{{route("revisor.dashboard")}}">Dashboard</a>  --}}
        
        {{-- <form class="dropdown-item" method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="nav-link btn bg-white">
                Logout
            </button>
        </form> --}}


        
        {{-- SEARCHBAR --}}
        <div class="col-12 d-flex mt-3 justify-content-center">
            <form class="d-flex w-100" action="{{route("article.search")}}" method="GET" role="search" type="search">
                <input class="form-control me-2 rounded-4 border-0" id="navbarSearchbar" name="searched" type="search" placeholder="Cerca annunci..." aria-label="Search">
                <button class="btn btn-accent rounded-4 border-0" type="submit"><i
                    class="bi bi-search"></i>
                </button>
            </form>
        </div>
    </div>
</div>
        
<nav class="navbar fixed-top navbar-expand-lg bg-s text-p shadow-sm pb-3">
  <div class="container-fluid w-100">
      <div class="row w-100 m-0">
          <div class="col-12 d-flex justify-content-between">
              <a class="navbar-brand text-a" href="{{ route('homepage') }}">Navbar</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  {{-- NAVBAR NAV LINKS --}}
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                          <a class="nav-link text-p" aria-current="page" href="{{ route('homepage') }}">Home</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link text-p" href="#">Link</a>
                      </li>
                      {{-- CATEGORY DROPDOWN --}}
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle text-p" href="#" role="button" data-bs-toggle="dropdown"
                              aria-expanded="false">
                              Dropdown
                          </a>
                          <ul class="dropdown-menu">
                              @foreach ($categories as $category)
                              <li><a class="dropdown-item" href="{{route("categoryShow", compact("category"))}}">{{$category->name}} ({{$category->articles->count()}})</a></li>
                              @endforeach
                          </ul>
                      </li>
                  </ul>
                  {{-- NAVBAR USER AND LANG PANEL --}}
                  <div class="collapse navbar-collapse d-flex">
                      <div class="ms-auto dropdown">
                          {{-- USER ICONS AND PROPIC --}}
                          <a class="nav-link dropdown-toggle text-p" href="#" role="button" data-bs-toggle="dropdown"
                          aria-expanded="false">
                              @auth
                              {{-- WHEN IMPLEMENTED, PROPIC HERE (IF NULL, CURRENT ICON OR DEFAULT PROPIC) --}}
                              <i class="bi bi-person-circle text-a f"></i>
                              @endauth
                                  
                              @guest
                              <i class="bi bi-person"></i>
                              @endguest
                          </a>
                              {{-- USER LOGIN AND LOGOUT --}}
                          <ul class="dropdown-menu dropdown-menu-end  bg-white">
                              @guest
                                  <li><a class="dropdown-item text-s" href="{{ route('login') }}">Accedi</a></li>
                                  <li><a class="dropdown-item text-s" href="{{ route('register') }}">Registrati</a></li>
                              @endguest
                              @auth
                                  <li>
                                      <a class="dropdown-item" href="#">Profilo</a>
                                  </li>

                                  <li>
                                      <a class="dropdown-item" href="#">Dashboard</a>
                                  </li>

                                  <li>
                                      <hr class="dropdown-divider mx-3">
                                  </li>

                                  <li><form class="dropdown-item" method="POST" action="{{route('logout')}}">
                                      @csrf 
                                          <button class="nav-link btn btn-primary">
                                              Logout
                                          </button>
                                      </form>
                                  </li>
                              @endauth
                          </ul>
                      </div>
                  </div>
             
              </div>
          </div>
          {{-- SEARCHBAR --}}
          <div class="col-12 d-flex mt-3">
              <form class="d-flex w-100" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-accent" type="submit">Search</button>
              </form>
          </div>
      </div>
  </div>
</nav>

       




<nav class="navbar navbar-expand-lg bg-light">
    <div class="container">
      <a class="navbar-brand text-primary" href="/"><i class="fa-solid fa-face-smile"></i> ပျော်ပါစေ</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
       
            <form class="ms-auto" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          </form>
          <ul class="navbar-nav ms-auto">
            @auth
            @if(Auth::user()->role=="Admin")
              <li class="nav-item">
                <a href="{{route('dashboard')}}" class="nav-link"> Dashboard </a>
              </li>
            @endif
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-solid fa-user"></i> {{Auth::user()->name}}
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{route('logout')}}"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a></li>
               
              </ul>
            </li>
    
                
            @else
            <li class="nav-item">
              <a class="nav-link" href="{{route('facebook.login')}}"><i class="fa-solid fa-right-to-bracket"></i></a>
            </li>
            @endif
          </ul>
      </div>
    </div>
  </nav>
<nav class="navbar navbar-expand-lg bg-light shadow">
    <div class="container">
      <a class="navbar-brand text-primary" href="/"><img src="{{URL::to('imgs/Happy.png')}}" style="width: 50px;" alt="ပျော်ပါစေ"> ပျော်ပါစေ</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
       
          
          <ul class="navbar-nav ms-auto">
            
            @auth
            @if(Auth::user()->role=="Admin")
              <li class="nav-item">
                <a href="{{route('dashboard')}}" class="nav-link"> <i class="fa-solid fa-table-columns"></i> Dashboard </a>
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
           
            @endif
          </ul>
      </div>
    </div>
  </nav>
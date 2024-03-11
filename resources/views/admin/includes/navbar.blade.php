<nav class="navbar navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand" href="{{route('front.index')}}">FreeWebsite</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto">

      </ul>
        <ul class="navbar-nav ms-auto">
           <li class="py-2 px-2 d-none  d-lg-block"><a class="nav-item text-decoration-none text-light" href="{{route('dashboard')}}">Dashboard</a></li>
           <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
               {{ Auth::user()->name }}
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{route('profile.edit')}}">{{ __('Profile') }}</a></li>
                <li><a class="dropdown-item" href="{{route('info.edit', 1)}}">Edit information</a></li>
                <li >
                  <a class="dropdown-item" aria-current="page" href="{{route('dashboard')}}">Dashboard</a>
                </li>
                <li >
                  <a class="dropdown-item" href="{{route('articles.index')}}">Gallery</a>
                </li>
                <li>
                     <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a href="{{route('logout')}}" class="dropdown-item"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </a>
                        </form>
                </li>
              </ul>
            </li>
        </ul>
    </div>
  </div>
</nav>
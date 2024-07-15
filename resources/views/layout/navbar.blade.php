<nav class="navbar navbar-expand-lg" style="background-color: {{ $background_color }}"  data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="{{ asset('logo.png') }}" alt="logo" width="30" style="margin-left: 10%">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" aria-current="page" href="{{ route('home') }}">Halaman Utama</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->is('about') ? 'active' : '' }}" aria-current="page" href="{{ route('about') }}">Tentang Saya</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->is('projects') ? 'active' : '' }}" aria-current="page" href="{{ route('project_index') }}">Project Saya</a>
          </li>

          @auth

            <li class="nav-item">
                {{-- <a class="nav-link active" aria-current="page" href="{{ route('logout') }}">Logout</a> --}}
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    @method('POST')
                    <button type="submit" class="nav-link active">Logout</button>
                </form>
            </li>

          @else

            <li class="nav-item">
                <a class="nav-link {{ request()->is('login') ? 'active' : '' }}" aria-current="page" href="{{ route('login') }}">Login</a>
            </li>

          @endauth

        </ul>
      </div>
    </div>
</nav>

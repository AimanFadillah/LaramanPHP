

<nav class="navbar navbar-expand-lg bg-danger navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="/"><i class="bi bi-house"></i> Laraman</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($tittle === 'home' )?"active":'' }}" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($tittle === 'about')?"active":'' }}" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($tittle === 'projeck')?"active":'' }}" href="/projeck">Projeck</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($tittle === 'kategori')?"active":'' }}" href="/kategori">Kategori</a>
          </li>

          @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Developer
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/dashbord"><i class="bi bi-card-list"></i> Dashbord</a></li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <form action="/logout" method="post" >
                  @csrf
                  <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                </form>
               
            </ul>
          </li>
          @else
          <li class="nav-item">
            <a class="nav-link {{ ($tittle === 'Login')?"active":'' }}" href="/login"><i class="bi bi-box-arrow-in-left"></i> Login</a>
          </li>
          @endauth

        </ul>
      </div>
    </div>
  </nav>
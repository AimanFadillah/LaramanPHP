<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-5 fw-bold   " href="/projeck"><i class="bi bi-table"></i> Laraman</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
          <form action="/logout" method="post">
              @csrf
              <button type="submit" class="bg-danger text-light fw-bold py-1" ><i class="bi bi-box-arrow-right"></i> Logout </button>
          </form>
      </div>
    </div>
  </header>
  
  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse" style="position: fixed; height:1000px ; background-color:#ddd" >
        <div class="position-sticky pt-3 sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link fw-bold {{ Request::is("dashbord") ? 'text-primary' : 'text-dark  ' }} " aria-current="page" href="/dashbord">
                <span data-feather="home" class="align-text-bottom"></span>
                <i class="bi bi-house fs-4 text-dark "></i> Dashboard
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-bold {{ Request::is("dashbord/projeck*") ? 'text-primary' : 'text-dark' }} " href="/dashbord/projeck">
                <span data-feather="file" class="align-text-bottom"></span>
                <i class="bi bi-file-earmark fs-4 "></i> Projek
              </a>
            </li>

            @can('admin')
            <li class="nav-item">
              <a class="nav-link fw-bold {{ Request::is("dashbord/kategori*") ? 'text-primary' : 'text-dark' }} " href="/dashbord/kategori">
                <span data-feather="file" class="align-text-bottom"></span>
                <i class="bi bi-bookmarks"></i> Kategori
              </a>
            </li>
           @endcan
           
          </ul>

          
  
          
        </div>
      </nav>
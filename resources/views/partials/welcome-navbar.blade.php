<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-danger">
      <div class="container-fluid">
        <a class="navbar-brand" href="/">SimusWeb</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link {{ $title == 'Home' ? 'active' : "" }}" aria-current="page" href="/">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ $title == 'Kontak' ? 'active' : "" }}" href="/kontak">Kontak</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ $title == 'About' ? 'active' : "" }}" href="/about">Tentang</a>
            </li>
          </ul>
          <form class="d-flex">
            <a href="/login"class="btn btn-outline-info"><i class="bi bi-box-arrow-in-right-lg"></i> login</a>
          </form>
        </div>
      </div>
    </nav>
  </header>
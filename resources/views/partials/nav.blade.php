<style>
  body {
  overflow-x: hidden;
}

.navbar-collapse {
  overflow-x: hidden;
  padding-left: 0.75rem;
  padding-right: 0.75rem;
}

@media (max-width: 991.98px) {
  .navbar-nav {
    width: 100%;
    text-align: center;
  }
@media (max-width: 991.98px) {
  .navbar-collapse.show {
    background-color: white;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
    border-radius: 0.5rem;
    padding: 1rem;
    margin-top: 0.75rem;

    max-width: 320px;  
    margin-left: auto;  
    margin-right: auto;
  }
}

  .navbar-nav .nav-item {
    width: 100%;
  }
  .navbar-collapse {
  transition: all 0.3s ease;
}
.navbar-collapse.show {
  border: 1px solid #ddd;
}
  .navbar-nav .nav-link {
    padding: 0.75rem;
    display: block;
  }
    .navbar-nav {
    width: 100%;
    text-align: center;
  }



}


</style>

<style>
  .bg-whites {
    background-color:#F4E4CB;
  }
</style>

<nav class="navbar navbar-expand-lg navbar-light bg-whites shadow sticky-top">
  <div class="container px-3" data-aos="fade-down" data-aos-duration="1000"> 
    <a class="navbar-brand d-flex align-items-center me-3" href="{{ url('/') }}">
      <img src="{{ asset('images/logo-kisha3.png') }}" alt="Logo" width="150" height="80" class="me-2">
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
      data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
      aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse w-100 fw-bold" id="navbarNav">
      <ul class="navbar-nav ms-auto text-uppercase">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('profile') ? 'active' : '' }}" href="{{ url('/profile') }}">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('profile#galeri') ? 'active' : '' }}" href="{{ url('/profile#galeri') }}">Galeri</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('portofolio') ? 'active' : '' }}" href="{{ url('/portofolio') }}">Portofolio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('team') ? 'active' : '' }}" href="{{ url('/team') }}">Team Squad</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('kontak') ? 'active' : '' }}" href="{{ url('/kontak') }}">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

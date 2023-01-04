<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container">
      <a class="navbar-brand" href="#">App | Test</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($active === "home") ? 'active' : '' }}" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active === "about") ? 'active' : '' }}" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active === "post") ? 'active' : '' }}" href="/post">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active === "categories") ? 'active' : '' }}" href="/Categories">Categories</a>
          </li>
        </ul>

        <ul class="navbar-nav ms-auto">
          
          @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Welcome back, {{ auth()->user()->name }}
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-bar-chart-line-fill"></i> My Dashboard</a></li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <form action="/logout" method="POST">
                  @csrf
                  <button type="submit" class="dropdown-item" ><i class="bi bi-backspace-reverse-fill"></i> Logout</button>
                </form>
              </li>
            </ul>
          </li>
          @else   
          <li class="nav-item">
            <a class="nav-link {{ ($active === "login") ? 'active' : '' }}" href="/login"><i class="bi bi-arrow-bar-right"></i> Login </a>
          </li>
          @endauth
         
        </ul>

      </div>
    </div>
  </nav>
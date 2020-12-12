<nav class="navbar navbar-expand-md navbar-dark bg-blue">
    <div class="container">
      <a class="navbar-brand" href="index.html">
          <img src="{{ asset('images/logo.png') }}" alt="Angular Project" />
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{ url('/') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/about-us') }}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/contact-us') }}">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="bloglist.html">Blog</a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a href="login.html" class="nav-link">Login</a>
            </li>
        </ul>
      </div>
      </div>
</nav>

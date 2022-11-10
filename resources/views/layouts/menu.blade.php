<nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
  <div class="container">
    <a class="navbar-brand" href="/">Web Toko Komputer Prodi SI</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
     aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="mr-auto navbar-nav"></ul>
      <ul class="navbar-nav">
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ URL::to('category') }}">Category</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ URL::to('contact') }}">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ URL::to('about') }}">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ URL::to('admin') }}">Login</a>
            </li>
      </ul>
    </div>
  </div>
</nav>
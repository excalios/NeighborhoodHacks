<nav class="navbar fixed-top navbar-expand-lg navbar-light navbar-fixed-top shadow-md" style="background-color: #ffffff">
  <div class="container">
    <img src="{{ asset('assets/img/BisnisIn!.png') }}" alt="BisnisIn!" width="85" />
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ Auth::user() ? route('dashboard') : route('landing_page')  }}">Home</a>
        </li>
        @if(!(Route::is('register') || Route::is('login') || Auth::user()))
        <li class="nav-item">
          <a class="nav-link" href="#features">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#success_stories">Success Stories</a>
        </li>
        @endif
        @if(Auth::user())
        <li class="nav-item">
          <a class="nav-link" href="#bussines">Business</a>
        </li>
        @endif
        <li class="nav-item">
          <a type="button" class="btn rounded-pill" href="{{ route('register') }}" style="background: linear-gradient(89.64deg, #4ec64f 4.71%, #7fda49 96.14%); color: #ffffff">{{ Auth::user() ? 'Upgrade' : 'Register'}}</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

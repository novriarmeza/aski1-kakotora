<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
    <a class="navbar-brand brand-logo" href="{{ url('/') }}">
      {{-- <img src="{{ url('assets/images/logo.svg') }}" alt="logo" /> --}}
    </a>
    <a class="navbar-brand brand-logo-mini" href="{{ url('/') }}">
      {{-- <img src="{{ url('assets/images/logo-mini.svg') }}" alt="logo" /> --}}
    </a>
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
      <span class="mdi mdi-menu"></span>
    </button>
    <ul class="navbar-nav navbar-nav-right">
      <li class="nav-item dropdown d-none d-xl-inline-block">
        <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">Sign Out ?</a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
            @if(isset(Auth::user()->name))
            <a class="dropdown-item" href="{{ url('/logout') }}" style="margin-top: 10px">Sign Out</a>
        @else
            <script>window.location = "/";</script>
        @endif
        </div>

    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
      <span class="mdi mdi-menu icon-menu"></span>
    </button>
  </div>
</nav>

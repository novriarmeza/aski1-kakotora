<nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="{{ url('/') }}">
        <img src="{{ url('images/aski.png') }}" height="35px" alt="logo" />
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="" style="color: white">Kakotora Dashboard <span></span></a>
          </li>
        </ul>
            @if(isset(Auth::user()->name))
                    <script>window.location="/";</script>

                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                @csrf
                </form>

                @else
                <a class="navbar-brand" href="{{ url('/login') }}" style="color: white">Login</a>
            @endif
      </div>
</nav>

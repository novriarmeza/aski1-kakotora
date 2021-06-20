<nav class="sidebar sidebar-offcanvas dynamic-active-class-disabled" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile not-navigation-link">
      <div class="nav-link">
        {{-- <div class="user-wrapper">
          <div class="profile-image">
            <img src="{{ url('assets/images/faces/face8.jpg') }}" alt="profile image">
          </div>
          <div class="text-wrapper">
            <p class="profile-name">Richard V.Welsh</p>
            <div class="dropdown" data-display="static">
            </div>
          </div>
        </div> --}}
        <a class="nav-link" href="{{ url('/kakotora-home/project-add') }}">
        <button class="btn btn-success btn-block">Add Data Project<i class="mdi mdi-plus"></i>
        </button>
        </a>
        <a class="nav-link" href="{{ url('/kakotora-home/reguler-add') }}">
        <button class="btn btn-info btn-block">Add Data Reguler<i class="mdi mdi-plus"></i>
        </button>
        </a>
      </div>
    </li>
    <li class="nav-item ">
      <a class="nav-link" href="{{ url('/kakotora-home') }}">
        <i class="menu-icon mdi mdi-television"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
  </ul>
</nav>

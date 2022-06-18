<aside class="aside is-placed-left is-expanded">
    <div class="aside-tools">
      <div class="flex-none w-56 flex flex-row items-center">
        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light-with-button-svg3.svg" alt="logo" />

          <strong class="capitalize ml-1 flex-1">Medic-EMR</strong>

          <button id="sliderBtn" class="flex-none text-right text-gray-900 hidden md:block">
          <i class="fad fa-list-ul"></i>
          </button>
      </div>
    </div>
    <div class="menu is-menu-main">
      <p class="menu-label">General</p>
      <ul class="menu-list">
        <li class="--set-active-index-html">
          <a href="{{url('/dashboard')}}">
            <span class="icon"><i class="mdi mdi-desktop-mac"></i></span>
            <span class="menu-item-label">Dashboard</span>
          </a>
        </li>
      </ul>
      <p class="menu-label">HOMES</p>
      <ul class="menu-list">
      <li class="--set-active-profile-html">
          <a  href="{{ url('/create_hospitalmanager') }}">
            <span class="icon"><i class="mdi mdi-account-circle"></i></span>
            <span class="menu-item-label">Create Hospital Managers</span>
          </a>
        </li>
        <li class="--set-active-profile-html">
          <a  href="{{ url('/create_hospital') }}">
            <span class="icon"><i class="mdi mdi-account-circle"></i></span>
            <span class="menu-item-label">Register Hospitals in your Zone</span>
          </a>
        </li>
        <li>

        <li class="--set-active-forms-html">
          <a  href="{{ url('hospitalmanagerprofile') }}">
            <span class="icon"><i class="mdi mdi-square-edit-outline"></i></span>
            <span class="menu-item-label">Profile</span>
          </a>
        </li>
        <li>
      </ul>
      <p class="menu-label">About</p>
      <ul class="menu-list">
        <li>
          <a href="https://github.com/Naty-Tefera/Medic_emr_backup.git" class="has-icon">
            <span class="icon"><i class="mdi mdi-help-circle"></i></span>
            <span class="menu-item-label">About</span>
          </a>
        </li>
        <li class="--set-active-forms-html">
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                  aria-labelledby="userDropdown">
                  <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                      <span class="icon"><i class="mdi mdi-lock"></i></span>
                      {{ __('Logout') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                  </form>
              </a>
        </li>
      </ul>
    </div>
  </aside>
  <section>
  <nav id="navbar-main" class="navbar is-fixed-top">
    <div class="navbar-brand">
      <a class="navbar-item mobile-aside-button">
        <span class="icon"><i class="mdi mdi-forwardburger mdi-24px"></i></span>
      </a>
      <div class="navbar-item">
        <section class="is-hero-bar">
      <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
        <h2 class="title">
          <strong>Zonal Health Bureau Information Goes Here</strong>
        </h2>

      </div>

  </section>
      </div>
    </div>
    <div class="navbar-brand is-right">
      <a class="navbar-item --jb-navbar-menu-toggle" data-target="navbar-menu">
        <span class="icon"><i class="mdi mdi-dots-vertical mdi-24px"></i></span>
      </a>
    </div>
    <div class="navbar-menu" id="navbar-menu">
       <div class="navbar-end">

        <div class="navbar-item dropdown has-divider has-user-avatar">
         
     <a href="https://justboil.me/tailwind-admin-templates" class="navbar-item has-divider desktop-icon-only">
          <span class="icon"><i class="mdi mdi-help-circle-outline"></i></span>
          <span>About</span>
        </a>
        <a href="https://github.com/Naty-Tefera/Medic_emr_backup.git" class="navbar-item has-divider desktop-icon-only">
          <span class="icon"><i class="mdi mdi-github-circle"></i></span>
          <span>GitHub</span>
        </a>
        <a href="{{ route('logout') }}" title="Log out" class="navbar-item desktop-icon-only">
          <span class="icon"><i class="mdi mdi-logout"></i></span>
          <span>Log out</span>
        </a>
      </div>
    </div>
  </nav>

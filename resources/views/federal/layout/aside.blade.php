
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
          <a href="{{ url('dashboard') }}">
            <span class="icon"><i class="mdi mdi-desktop-mac"></i></span>
            <span class="menu-item-label">Dashboard</span>
          </a>
        </li>
      </ul>
      <p class="menu-label">HOMES</p>
      <ul class="menu-list">

        <li class="--set-active-profile-html">
          <a  href="{{ url('/create_regionalbureau') }}">
            <span class="icon"><i class="mdi mdi-account-circle"></i></span>
            <span class="menu-item-label">Create Health Bureau</span>
          </a>
        </li>
        <li>



          <li class="--set-active-profile-html">
              <a  href="{{ url('/create_manager') }}">
                <span class="icon"><i class="mdi mdi-account-circle"></i></span>
                <span class="menu-item-label">Create Managers</span>
              </a>
            </li>

        <li>
        <li>
          <a class="dropdown">
            <span class="icon"><i class="mdi mdi-view-list"></i></span>
            <span class="menu-item-label">Submenus</span>
            <span class="icon"><i class="mdi mdi-plus"></i></span>
          </a>
          <ul>
            <li>
              <a href="#void">
                <span>Chats</span>
              </a>
            </li>
            <li>
              <a href="#void">
                <span>Notifications</span>
              </a>
            </li>
          </ul>
        </li>
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
          <a  href="{{ url('/profile') }}">
            <span class="icon"><i class="mdi mdi-square-edit-outline"></i></span>
            <span class="menu-item-label">Profile</span>
          </a>
        </li>
        <form method="POST" action="{{ route('logout') }}" x-data>
          @csrf
            <x-jet-dropdown-link 
                class="navbar-item"
                title="Logout" 
                href="{{ route('logout') }}"
                @click.prevent="$root.submit();"><span class="icon"><i class="mdi mdi-logout"></i></span>
                {{ __('Log Out') }}
            </x-jet-dropdown-link>
        </form>
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
          <strong>At Federal Level Information Reagrding Regional, City Adminstration And Speciality Health Bereaus</strong>
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
          <a class="navbar-link">
            <div class="user-avatar">
              <img src="https://avatars.dicebear.com/v2/initials/john-doe.svg" alt="Dr." class="rounded-full">
            </div>
            <div class="is-user-name"><span class="mr-2 d-none d-lg-inline text-gray-600 small"> {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</span></div>
            <span class="icon"><i class="mdi mdi-chevron-down"></i></span>
          </a>
          <div class="navbar-dropdown">
            <a  title = "See Profile" href="profile.html" class="navbar-item active">
              <span class="icon"><i class="mdi mdi-account"></i></span>
              <span>My Profile</span>
            </a>
            <a class="navbar-item" title = "See your setting">
              <span class="icon"><i class="mdi mdi-settings"></i></span>
              <span>Settings</span>
            </a>
            <a class="navbar-item" title = "Messages">
              <span class="icon"><i class="mdi mdi-email"></i></span>
              <span>Messages</span>
            </a>
            <hr class="navbar-divider">
            <form method="POST" action="{{ route('logout') }}" x-data>
              @csrf
                <x-jet-dropdown-link 
                    class="navbar-item"
                    title="Logout" 
                    href="{{ route('logout') }}"
                    @click.prevent="$root.submit();"><span class="icon"><i class="mdi mdi-logout"></i></span>
                    {{ __('Log Out') }}
                </x-jet-dropdown-link>
          </form>
          </div>
        </div>
        <!-- <form method="POST" action="{{ route('logout') }}" x-data>
              @csrf
                <x-jet-dropdown-link 
                    class="navbar-item"
                    title="Logout" 
                    href="{{ route('logout') }}"
                    @click.prevent="$root.submit();"><span class="icon"><i class="mdi mdi-logout"></i></span>
                    {{ __('Log Out') }}
                </x-jet-dropdown-link>
          </form> -->
      </div>
    </div>
  </nav>

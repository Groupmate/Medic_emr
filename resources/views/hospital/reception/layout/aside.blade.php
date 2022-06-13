<aside class="aside is-placed-left is-expanded">
  <div class="aside-tools">
    
    <div class="flex-none w-30 flex flex-row items-center">
      <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light-with-button-svg3.svg" alt="logo" />
      
        <strong class="capitalize  flex-1">Medic-EMR</strong>

    </div>
  </div>
  <div class="menu is-menu-main">
    <p class="menu-label">General</p>
    <ul class="menu-list">
      <li class="">
        <a  href="{{ url('/dash') }}">
          <span class="icon"><i class="mdi mdi-desktop-mac"></i></span>
          <span class="menu-item-label"><strong>Dashboard</strong></span>
        </a>
      </li>
    </ul>
    <p class="menu-label">HOMES</p>
    <ul class="menu-list">
     
      <li class="--set-active-profile-html">
        <a href="{{ url('/register_patient') }}">
          <span class="icon"><i class="mdi mdi-account-circle"></i></span>
          <span class="menu-item-label"><strong> Add Patient    </strong></span>
        </a>
      </li>
      <li class="--set-active-forms-html">
        <a href="{{ url('/assign_patient') }}">
          <span class="icon"><i class="mdi mdi-square-edit-outline"></i></span>
          <span class="menu-item-label"><strong>Assign Patient</strong></span>
        </a>
      </li>
       <li class="--set-active-forms-html">
        <a href="{{ url('/bookings/create') }}">
          <span class="icon"><i class="mdi mdi-square-edit-outline"></i></span>
          <span class="menu-item-label"><strong>Book an appointment</strong></span>
        </a>
      </li>
      <li class="--set-active-forms-html">
        <a href="{{ url('/incomingrefer') }}">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-3" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M16.707 10.293a1 1 0 010 1.414l-6 6a1 1 0 01-1.414 0l-6-6a1 1 0 111.414-1.414L9 14.586V3a1 1 0 012 0v11.586l4.293-4.293a1 1 0 011.414 0z" clip-rule="evenodd" />
          </svg>
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z" />
          <path stroke-linecap="round" stroke-linejoin="round" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0" />
          </svg>
          <span class="menu-item-label ml-1"><strong>Incoming Refer</strong></span>
        </a>
      </li>
      <li>
      <li class="--set-active-tables-html">
        <a href="{{ url('/receptionprofile') }}">
          <span class="icon"><i class="mdi mdi-table"></i></span>
          <span class="menu-item-label"><strong>Profile</strong></span>
        </a>
      </li>
    
    </ul>
    <p class="menu-label"><strong>About</strong></p>
    <ul class="menu-list">
      
      <li>
        <a href="https://justboil.me/tailwind-admin-templates" class="has-icon">
          <span class="icon"><i class="mdi mdi-help-circle"></i></span>
          <span class="menu-item-label"><strong>About</strong></span>
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
<!-- <section class="section main-section"> -->
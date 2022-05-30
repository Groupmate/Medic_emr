
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
      <li>
      <li class="--set-active-tables-html">
        <a href="">
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
        <a href="">
          <span class="icon"><i class="mdi mdi-lock"></i></span>
          <span class="menu-item-label"><strong>Logout</strong></span>
        </a>
      </li>
    </ul>
  </div>
</aside>
<section class="section main-section">

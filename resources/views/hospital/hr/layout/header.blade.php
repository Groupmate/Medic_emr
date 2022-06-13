<!DOCTYPE html>
<html lang="en" class="">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Hospital HR </title>
  <!-- Tailwind is included -->

  <link href="{{ asset('csss/main.css?v=1628755089081') }}" rel="stylesheet">
  <link href="{{ asset('frontend/csss/style.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">
  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png"/>
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png"/>
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png"/>
  <link rel="mask-icon" href="safari-pinned-tab.svg" color="#00b4b6"/>
</head>

<body>

<div id="app">
    <nav id="navbar-main" class="navbar is-fixed-top">
        <div class="navbar-brand">
            <div class="navbar-brand">
            <a class="navbar-item mobile-aside-button">
                <span class="icon"><i class="mdi mdi-forwardburger mdi-24px"></i></span>

            </a>
            </div>

        </div>
            <div class="navbar-item dropdown has-divider has-user-avatar">
                <a class="navbar-link">
               
                </a>
                <div class="navbar-dropdown">
                
                </div>
            </div>

            <a title="Log out" class="navbar-item desktop-icon-only">
                <span class="icon"><i class="mdi mdi-logout"></i></span>
                <span>Log out</span>
            </a>
            </div>
        </div>
    </nav>

    <aside class="aside is-placed-left is-expanded">
        <div class="aside-tools">

            <div class="flex-none w-30 flex flex-row items-center">
            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light-with-button-svg3.svg" alt="logo" />

                <strong class="capitalize  flex-1">Medic-EMR</strong>

                <button id="sliderBtn" class="flex-none ml-12 text-right text-gray-200 hidden md:block">
                <i class="fad fa-list-ul"></i>
                </button>
            </div>
        </div>
        <div class="menu is-menu-main">
        <p class="menu-label">General</p>
        <ul class="menu-list">
        <li class="">
            <a href="{{ url('dashboard') }}">
            <span class="icon"><i class="mdi mdi-desktop-mac"></i></span>
            <span class="menu-item-label"><strong>Dashboard</strong></span>
            </a>
        </li>
        </ul>
        <p class="menu-label">HOMES</p>
        <ul class="menu-list">

        <li class="--set-active-profile-html">
            <a href="/employee">
            <span class="icon"><i class="mdi mdi-account-circle"></i></span>
            <span class="menu-item-label"><strong>Employee</strong></span>
            </a>
        </li>
        <li class="--set-active-profile-html">
            <a href="/add_doctor">
            <span class="icon"><i class="mdi mdi-account-circle"></i></span>
            <span class="menu-item-label"><strong>Doctor</strong></span>
            </a>
        </li>
        <li>
            <a class="dropdown">
            <span class="icon"><i class="mdi mdi-view-list"></i></span>
           <span class="menu-item-label"><strong>Block</strong></span>
            <span class="icon"><i class="mdi mdi-plus"></i></span>
            </a>
            <ul>
            <li>
                <a href="/block">
                    <div class="ml-6">
                       <i class="fas fa-list mr-3"></i> <span>Add Block</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="/listblock">
                    <div class="ml-6">
                        <i class="fas fa-list mr-3"></i> <span>Listblock</span>
                    </div>
                </a>
            </li>
            </ul>
        </li>
        <li>
            <a class="dropdown">
            <span class="icon"><i class="mdi mdi-view-list"></i></span>
            <span class="menu-item-label"><strong>Room</strong></span>
            <span class="icon"><i class="mdi mdi-plus"></i></span>
            </a>
            <ul>
            <li>
                <a href="/room">
                    <div class="ml-6">
                        <i class="fas fa-list mr-3"></i> <span>Add room</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="/listroom">
                    <div class="ml-6">
                            <i class="fas fa-list mr-3"></i> <span>  Listroom</span>
                    </div>
                </a>
            </li>
            </ul>
        </li>
        <li>
            <a class="dropdown">
            <span class="icon"><i class="mdi mdi-view-list"></i></span>
            <span class="menu-item-label"><strong>Bed</strong></span>
            <span class="icon"><i class="mdi mdi-plus"></i></span>
            </a>
            <ul>
            <li>
                <a href="/bed">
                    <div class="ml-6">
                        <i class="fas fa-list mr-3"></i> <span> Add bed</span>
                    </div>
                </a>
            </li>
            <li>
             <a href="/listbed">
                    <div class="ml-6">
                        <i class="fas fa-list mr-3"></i> <span> Listbed</span>
                    </div>
            </a>
            </li>
            </ul>
        </li>
        </ul>
        <p class="menu-label"><strong>About</strong></p>
        <ul class="menu-list">
        <li>
             <a href="https://github.com/Naty-Tefera/Medic_emr_backup.git" class="has-icon">
            <span class="icon"><i class="mdi mdi-help-circle"></i></span>
            <span class="menu-item-label"><strong>About</strong></span>
            </a>
        </li>
        <li class="--set-active-forms-html">
            </a>
             <li class="--set-active-forms-html">
                 <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ __('Dr. ') }} {{ Auth::user()->firstname }} {{ Auth::user()->lastname }} </span>
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
        </li>
        </ul>
        </div>
    </aside>


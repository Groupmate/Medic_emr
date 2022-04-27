<!DOCTYPE html>
<html lang="en" class="">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Regional Admin Dashboard</title>

  <!-- Tailwind is included -->

  <link href="{{ asset('csss/main.css?v=1628755089081') }}" rel="stylesheet">

  <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">

  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png"/>
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png"/>
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png"/>
  <link rel="mask-icon" href="safari-pinned-tab.svg" color="#00b4b6"/>
</head>
<body>

<div id="app">



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
        <a href="{{ url('dashboard2') }}">
          <span class="icon"><i class="mdi mdi-desktop-mac"></i></span>
          <span class="menu-item-label">Dashboard</span>
        </a>
      </li>
    </ul>
    <p class="menu-label">HOMES</p>
    <ul class="menu-list">

      <li class="--set-active-profile-html">
        <a  href="{{ url('/create_zonalbureau') }}">
          <span class="icon"><i class="mdi mdi-account-circle"></i></span>
          <span class="menu-item-label">Create Zone Bureau</span>
        </a>
      </li>
      <li>



        <li class="--set-active-profile-html">
            <a  href="{{ url('/create_zonalmanager') }}">
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
        <a href="" class="has-icon">
          <span class="icon"><i class="mdi mdi-help-circle"></i></span>
          <span class="menu-item-label">About</span>
        </a>
      </li>
      <li class="--set-active-forms-html">
        <a  href="{{ url('profile') }}">
          <span class="icon"><i class="mdi mdi-square-edit-outline"></i></span>
          <span class="menu-item-label">Profile</span>
        </a>
      </li>
      <li class="--set-active-forms-html">
        <a href="{{ route('logout') }}">
          <span class="icon"><i class="mdi mdi-lock"></i></span>
          <span class="menu-item-label">Logout</span>
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
        <strong>Regional Organization Information</strong>
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
            <img src="https://avatars.dicebear.com/v2/initials/john-doe.svg" alt="Dr" class="rounded-full">
          </div>
          <div class="is-user-name"><span> </span></div>
          <span class="icon"><i class="mdi mdi-chevron-down"></i></span>
        </a>
        <div class="navbar-dropdown">
          <a href="profile.html" class="navbar-item active">
            <span class="icon"><i class="mdi mdi-account"></i></span>
            <span>My Profile</span>
          </a>
          <a class="navbar-item">
            <span class="icon"><i class="mdi mdi-settings"></i></span>
            <span>Settings</span>
          </a>
          <a class="navbar-item">
            <span class="icon"><i class="mdi mdi-email"></i></span>
            <span>Messages</span>
          </a>
          <hr class="navbar-divider">
          <a class="navbar-item">
            <span class="icon"><i class="mdi mdi-logout"></i></span>
            <span>Log Out</span>
          </a>
        </div>
      </div>
      <a title="Log out" class="navbar-item desktop-icon-only">
        <span class="icon"><i class="mdi mdi-logout"></i></span>
        <span>Log out</span>
      </a>
    </div>
  </div>
</nav>

<x-app-layout>
 <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @livewire('regional.create-zonal')
            </div>
        </div>
    </div>
    </x-app-layout>
</section>

<footer class="footer">
  <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0">
    <div class="flex items-center justify-start space-x-3">
      <div>
        © 2021, JustBoil.me
      </div>
      <a href="https://github.com/Naty-Tefera/Medic_emr_backup.git" style="height: 20px">
        <img src="https://img.shields.io/github/v/release/justboil/admin-one-tailwind?color=%23999">
      </a>
    </div>

    </a>
  </div>
</footer>



<!-- Scripts below are for demo only -->
<script src="{{asset('js/main.min.js?v=1628755089081')}}"></script>
<script  src="{{asset('js/chart.sample.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>



<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '658339141622648');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=658339141622648&ev=PageView&noscript=1"/></noscript>

<!-- Icons below are for demo only. Feel free to use any icon pack. Docs: https://bulma.io/documentation/elements/icon/ -->
<link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.9.95/css/materialdesignicons.min.css">

</body>
</html>


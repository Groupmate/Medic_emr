<!DOCTYPE html>
<html lang="en" class="">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Hospital HR </title>
  <!-- Tailwind is included -->

  <link href="{{ asset('csss/main1.css?v=1628755089081') }}" rel="stylesheet">
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
          <div class="user-avatar">
            <img src="https://avatars.dicebear.com/v2/initials/john-doe.svg" alt="John Doe" class="rounded-full">
          </div>
          <div class="is-user-name"><span>John Doe</span></div>
          <span class="icon"><i class="mdi mdi-chevron-down"></i></span>
        </a>
        <div class="navbar-dropdown">
          <a href="profile.html" class="navbar-item">
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
    
      <!-- <a title="Log out" class="navbar-item desktop-icon-only">
        <span class="icon"><i class="mdi mdi-logout"></i></span>
        <span>Log out</span>
      </a> -->
    </div>
  </div>
</nav>

<aside class="aside is-placed-left is-expanded">
  <div class="aside-tools">
    
    <div class="flex-none w-30 flex flex-row items-center">
      <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light-with-button-svg3.svg" alt="logo" />
      
        <strong class="capitalize  flex-1">Medic-EMR</strong>

        <button id="sliderBtn" class="flex-none text-right text-gray-200 hidden md:block">
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
        <a href="">
          <span class="icon"><i class="mdi mdi-account-circle"></i></span>
          <span class="menu-item-label"><strong>Employee</strong></span>
        </a>
      </li>
      <li>
      <li class="--set-active-tables-html">
        <a href="">
          <span class="icon"><i class="mdi mdi-table"></i></span>
          <span class="menu-item-label"><strong>User</strong></span>
        </a>
      </li>
      <li class="--set-active-forms-html">
        <a href="">
          <span class="icon"><i class="mdi mdi-square-edit-outline"></i></span>
          <span class="menu-item-label"><strong>Statics</strong></span>
        </a>
      </li>
      <li>
        <a class="dropdown">
          <span class="icon"><i class="mdi mdi-view-list"></i></span>
          <span class="menu-item-label"><strong>Submenus</strong></span>
          <span class="icon"><i class="mdi mdi-plus"></i></span>
        </a>
        <ul>
          <li>
            <a href="#void">
              <span>==> Profile</span>
            </a>
          </li>
          <li>
            <a href="#void">
              <span>==> Settings</span>
            </a>
          </li>
        </ul>
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
      </li>
    </ul>
  </div>
</aside>
  <section class="section main-section">
    <x-app-layout >
            <div class="py-12">
                  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        @livewire('hospital.hr.employee')
                        </div>
                  </div>
            </div>      
      </x-app-layout>
  </section>
</div>


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

<div> 
    <nav  class="navbar is-fixed-top">
      <div class="navbar-brand">
        <a class="navbar-item mobile-aside-button">
          <span class="icon"><i class="mdi mdi-forwardburger mdi-24px"></i></span>
        </a>
         <span class="ml-2">
          <h4><strong>{{ $hospital_name }} Human Resource Hospital  Dashboard </strong></h4>
        </span>
      </div>  
      <div class="navbar-item">
        <div class="flex">
           
          <div class="flex flex-row mr-2 w-24 h-10">
              <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-900"></i>
                  {{ __('Logout') }}
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
          </div>
      </div> 
    </nav>
        <!-- card -->
      <div class="grid gap-6 grid-cols-1 md:grid-cols-3 mb-4">
      <div class="card">
        <div class="card-content">
          <div class="flex items-center p-6 bg-white rounded-lg shadow-xs dark:bg-gray-800">
            <div class="widget-label">
              <h3>
                <strong>Outpatient Doctor</strong>
              </h3>
              <h1>
                {{$opd_count}}
              </h1>
            </div>
            <span class="icon widget-icon text-green-500"><i class="mdi mdi-account-multiple mdi-48px"></i></span>
          </div>
        </div>
      </div>
    <!-- end card -->
      <!-- card -->
      <div class="card">
        <div class="card-content">
          <div class="flex items-center justify-between">
            <div class="widget-label">
              <h3>
               <strong>Inpatient Doctor</strong>
              </h3>
              <h1>
                {{$ipd_count}}
              </h1>
            </div>
            <span class="icon widget-icon text-red-500"><i class="mdi mdi-account-multiple mdi-48px"></i></span>
          </div>
        </div>
      </div>
    <!-- end card -->
        <!-- end card -->
      <!-- card -->
      <div class="card">
        <div class="card-content">
          <div class="flex items-center justify-between">
            <div class="widget-label">
              <h3>
              <strong>Emergency Doctor</strong>
              </h3>
              <h1>
                {{$emergency_count}}
              </h1>
            </div>
            <span class="icon widget-icon text-gray-500"><i class="mdi mdi-account-multiple mdi-48px"></i></span>
          </div>
        </div>
      </div>
    <!-- end card -->
      <!-- card -->
      <div class="card">
        <div class="card-content">
          <div class="flex items-center justify-between">
            <div class="widget-label">
              <h3>
              <strong>Total Doctors</strong>  
              </h3>
              <h1>
                {{$total}}
              </h1>
            </div>
            <span class="icon widget-icon text-blue-500"><i class="mdi mdi-account-multiple mdi-48px"></i></span>
          </div>
        </div>
      </div>
  
 
    <!-- end card -->
    <div class="navbar-brand is-right">
        <a class="navbar-item --jb-navbar-menu-toggle" data-target="navbar-menu">
          <span class="icon"><i class="mdi mdi-dots-vertical mdi-24px"></i></span>
        </a>
        <button class="button light">Button</button>
    </div>
        
         @livewire('statics.line-chart')

    <section class="is-hero-bar">
      
      
 







   


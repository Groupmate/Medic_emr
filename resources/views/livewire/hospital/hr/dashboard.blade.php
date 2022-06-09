 <span><h6><strong>Human Resource Hospital  Dashboard: </strong></h6></span>
     
        <!-- card -->
      <div class="grid gap-6 grid-cols-1 md:grid-cols-3 mb-6">
      <div class="card">
        <div class="card-content">
          <div class="flex items-center justify-between">
            <div class="widget-label">
              <h3>
                Outpatient Doctor
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
               Inpatient Doctor
              </h3>
              <h1>
                {{$ipd_count}}
              </h1>
            </div>
            <span class="icon widget-icon text-green-500"><i class="mdi mdi-account-multiple mdi-48px"></i></span>
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
              Emergency Doctor
              </h3>
              <h1>
                {{$emergency_count}}
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
                Total 
              </h3>
              <h1>
                {{$total}}
              </h1>
            </div>
            <span class="icon widget-icon text-green-500"><i class="mdi mdi-account-multiple mdi-48px"></i></span>
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
      
      
 







   


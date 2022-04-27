<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>

    <!-- Custom fonts for this template-->
   
    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">
    
    @livewireStyles
</head>
<body class="bg-gray-100">


<!-- start navbar -->
<body class="bg-gray-900">
<!-- start navbar -->
<div class="md:fixed md:w-full md:top-0 md:z-20 flex flex-row flex-wrap items-center bg-white p-6 border-b border-gray-300">
    
    <!-- logo -->
    <div class="flex-none w-56 flex flex-row items-center">
      <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light-with-button-svg3.svg" alt="logo" />
      
        <strong class="capitalize ml-1 flex-1">Medic-EMR</strong>

        <button id="sliderBtn" class="flex-none text-right text-gray-900 hidden md:block">
        <i class="fad fa-list-ul"></i>
        </button>
    </div>
    
    <!-- navbar content toggle -->
    <button id="navbarToggle" class="hidden md:block md:fixed right-0 mr-6">
      <i class="fad fa-chevron-double-down"></i>
    </button>
    <!-- end navbar content toggle -->

    <!-- navbar content -->
    <div id="navbar" class="animated md:hidden md:fixed md:top-0 md:w-full md:left-0 md:mt-16 md:border-t md:border-b md:border-gray-200 md:p-10 md:bg-white flex-1 pl-3 flex flex-row flex-wrap justify-between items-center md:flex-col md:items-center">
      <!-- left -->
      <div class="text-gray-600 md:w-full md:flex md:flex-row md:justify-evenly md:pb-10 md:mb-10 md:border-b md:border-gray-200">
        <a class="mr-2 transition duration-500 ease-in-out hover:text-gray-900" href="#" title="email"><i class="fad fa-envelope-open-text"></i></a>        
        <a class="mr-2 transition duration-500 ease-in-out hover:text-gray-900" href="#" title="email"><i class="fad fa-comments-alt"></i></a>        
        <a class="mr-2 transition duration-500 ease-in-out hover:text-gray-900" href="#" title="email"><i class="fad fa-check-circle"></i></a>        
        <a class="mr-2 transition duration-500 ease-in-out hover:text-gray-900" href="#" title="email"><i class="fad fa-calendar-exclamation"></i></a>        
      </div>
      <!-- end left -->      
        <!-- right -->
      <div class="flex flex-row-reverse items-center"> 

        <!-- user -->
        <div class="dropdown relative md:static">

          <button class="menu-btn focus:outline-none focus:shadow-outline flex flex-wrap items-center">
            <div class="w-8 h-8 overflow-hidden rounded-full">
                <img class="w-full h-full object-cover" src="<?php echo e(asset('frontend/img/user.svg')); ?>" >
            </div> 

            <div class="ml-2 capitalize flex ">
              <strong class="text-sm text-gray-800 font-semibold m-0 p-0 leading-none"></strong>
             
                 <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span
                                    class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->username }}</span>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
                
              
            </div>                        
           

          <div class="text-gray-500 menu hidden md:mt-10 md:w-full rounded bg-white shadow-md absolute z-20 right-0 w-40 mt-5 py-2 animated faster">

            <!-- item -->
            <a class="px-4 py-2 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out" href="#">
              <i class="fad fa-user-edit text-xs mr-1"></i> 
              edit my profile
            </a>     
            <!-- end item -->

            <!-- item -->
            <a class="px-4 py-2 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out" href="#">
              <i class="fad fa-inbox-in text-xs mr-1"></i> 
              my inbox
            </a>     
            <!-- end item -->

            <!-- item -->
            <a class="px-4 py-2 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out" href="#">
              <i class="fad fa-badge-check text-xs mr-1"></i> 
              tasks
            </a>     
            <!-- end item -->

            <!-- item -->
            <a class="px-4 py-2 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out" href="#">
              <i class="fad fa-comment-alt-dots text-xs mr-1"></i> 
              chats
            </a>     
            <!-- end item -->

            <hr>

            <!-- item -->
            <a class="px-4 py-2 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out" href="#">
              <i class="fad fa-user-times text-xs mr-1"></i> 
              log out
            </a>     
            <!-- end item -->

          </div>
        </div>
        <!-- end user -->

        


      </div>
      <!-- end right -->
    </div>
    <!-- end navbar content -->

  </div>
<!-- end navbar -->


<!-- strat wrapper -->
<div class="screen flex flex-row flex-wrap">
  
    <!-- start sidebar -->
  <div id="sideBar" class="relative flex flex-col flex-wrap bg-white border-r border-gray-300 p-6 flex-none w-64 md:-ml-64 md:fixed md:top-0 md:z-30 md:h-screen md:shadow-xl animated faster">
    

    <!-- sidebar content -->
    <div class="flex flex-col">

      <!-- sidebar toggle -->
      <div class="text-right hidden md:block mb-4">
        <button id="sideBarHideBtn">
          <i class="fad fa-times-circle"></i>
        </button>
      </div>
      <!-- end sidebar toggle -->

      <p class="uppercase text-xs text-gray-600 mb-4 tracking-wider">homes</p>

      <!-- link -->
     
      <a href="./index.html" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
        <i class="fad fa-shopping-cart text-xl mr-2"></i>         
         Dashboard
      </a>  
      
        <div id="dropdown" x-show="show" class="ml-4">
            <a class="block px-3 py-2  capitalize font-medium text-base hover:text-teal-600 transition ease-in-out duration-500" href="#">
            <i class="fad fa-calendar-check text-xl mr-3"></i>
                Appointement
            </a>
            <a class="block px-3 py-2  capitalize font-medium text-base hover:text-teal-600 transition ease-in-out duration-500" href="#">
            <i class="fas fa-hospital-user text-xl mr-3"></i>
                Today Patient
            </a>
            <a class="block px-3 py-2  capitalize font-medium text-base hover:text-teal-600 transition ease-in-out duration-500" href="#">
            <i class="fas fa-bell text-xl mr-3"></i>
                Notifications</a>
            </a>
            <a class="block px-3 py-2  capitalize font-medium text-base hover:text-teal-600 transition ease-in-out duration-500" href="#">
            <i class="fas fa-file-chart-line text-xl mr-3"></i>
                Reports
            </a>
        
           
        <hr class="border-t border-gray-200 my-0">
      </div>
      <!-- end link -->
      
      

    </div>
    <!-- end sidebar content -->

  </div>
  <!-- end sidbar -->

  <!-- strat content -->
  <div class="bg-gray-100 flex-1 p-6 md:mt-16"> 

    <!-- General Report -->
    <div class="grid grid-cols-4 gap-6 xl:grid-cols-1">


        <!-- card -->
        <div class="report-card">
            <div class="card">
                <div class="card-body flex flex-col">
                    
                    <!-- top -->
                    <div class="flex flex-row justify-between items-center">
                        <div class="h6 text-indigo-700 fad fa-shopping-cart"></div>
                        <span class="rounded-full text-white badge bg-teal-400 text-xs">
                            12%
                            <i class="fal fa-chevron-up ml-1"></i>
                        </span>
                    </div>
                    <!-- end top -->
    
                    <!-- bottom -->
                    <div class="mt-8">
                        <h1 class="h5 num-4"></h1>
                        <a href="{{ url('/home') }}">New assigned patients</a>
                    </div>                
                    <!-- end bottom -->
        
                </div>
            </div>
            <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
        </div>
        <!-- end card -->
    
    
        <!-- card -->
        <div class="report-card">
            <div class="card">
                <div class="card-body flex flex-col">
                    
                    <!-- top -->
                    <div class="flex flex-row justify-between items-center">
                        <div class="h6 text-red-700 fad fa-store"></div>
                        <span class="rounded-full text-white badge bg-red-400 text-xs">
                            6%
                            <i class="fal fa-chevron-down ml-1"></i>
                        </span>
                    </div>
                    <!-- end top -->
    
                    <!-- bottom -->
                    <div class="mt-8">
                        <h1 class="h5 num-4"></h1>
                        <p>new notifications</p>
                    </div>                
                    <!-- end bottom -->
        
                </div>
            </div>
            <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
        </div>
        <!-- end card -->
    
    
        <!-- card -->
        <div class="report-card">
            <div class="card">
                <div class="card-body flex flex-col">
                    
                    <!-- top -->
                    <div class="flex flex-row justify-between items-center">
                        <div class="h6 text-yellow-600 fad fa-sitemap"></div>
                        <span class="rounded-full text-white badge bg-teal-400 text-xs">
                            72%
                            <i class="fal fa-chevron-up ml-1"></i>
                        </span>
                    </div>
                    <!-- end top -->
    
                    <!-- bottom -->
                    <div class="mt-8">
                        <h1 class="h5 num-4"></h1>
                        <p>total Patients vist</p>
                    </div>                
                    <!-- end bottom -->
        
                </div>
            </div>
            <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
        </div>
        <!-- end card -->
    
    
        <!-- card -->
        <div class="report-card">
            <div class="card">
                <div class="card-body flex flex-col">
                    
                    <!-- top -->
                    <div class="flex flex-row justify-between items-center">
                        <div class="h6 text-green-700 fad fa-users"></div>
                        <span class="rounded-full text-white badge bg-teal-400 text-xs">
                            150%
                            <i class="fal fa-chevron-up ml-1"></i>
                        </span>
                    </div>
                    <!-- end top -->
    
                    <!-- bottom -->
                    <div class="mt-8">
                        <h1 class="h5 num-4"></h1>
                        <p>Appointement Visitor</p>
                    </div>                
                    <!-- end bottom -->
        
                </div>
            </div>
            <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
        </div>
        <!-- end card -->
    </div>
        <!-- End General Report -->

     <!--Start of charts, bars -->
      
      <br>
      <div class="card p-0 overflow-hidden col-span-2 lg:col-span-1 flex flex-row lg:flex-col">
     
        <!-- right -->
        <div class="border-r border-gray-200 w-2/3 lg:w-full lg:mb-5">
            
            <!-- top -->
            <div class="p-5 flex flex-row flex-wrap justify-between items-center">
                <div class="font-bold text-lg">Monthly and Weekly Trends</div>
                <div class="flex flex-row justify-center items-center">
                    <a href="#" class="btn mr-4 text-sm py-2 block">Month</a>
                    <a href="#" class="btn-shadow text-sm py-2 block">Week</a>
                </div>
            </div>
            <!-- end top -->
    
            <!-- chart -->                
            <div id="SummaryChart"></div>
            <!-- end chart -->
    
        </div>
        <!-- end right -->
    
        <!-- left -->
        <div class="w-1/3 lg:w-full">
            
            <!-- top -->
            <div class="p-2 border-b border-gray-400">
                <h2 class="font-bold text-lg mb-6">List of  Appointments</h2>
    
                <div class="flex flex-row justify-between mb-3">
                    <div class="">
                        <h4 class="text-gray-600 font-thin">John Wicks</h4>
                        <p class="text-red-400 text-xs font-hairline"> after 30 min </p>
                    </div>
                    <div class="text-sm font-medium">
                        <span class="text-red-400">+</span> 10:00 am
                    </div>
                </div>
    
                <div class="flex flex-row justify-between mb-3">
                    <div class="">
                        <h4 class="text-gray-600 font-thin">Albert Enistine</h4>
                        <p class="text-red-400 text-xs font-hairline">after 4:30 hours </p>
                    </div>
                    <div class="text-sm font-medium">
                        <span class="text-red-400">+</span> 2:00 pm
                    </div>
                </div>
                
                <div class="flex flex-row justify-between">
                    <div class="">
                        <h4 class="text-gray-600 font-thin">Alemu Kaleb</h4>
                        <p class="text-red-400 text-xs font-hairline">after 6:00 hours </p>
                    </div>
                    <div class="text-sm font-medium">
                        <span class="text-red-400">+</span> 4:00 pm 
                    </div>
                </div>
    
                
                <div class="p-5">
                  <h2 class="font-bold text-lg mb-2">Today's Progress</h2>
                  <div class="bg-gray-300 h-2 rounded-full mt-2 relative">
                      <div class="rounded-full bg-teal-400 h-full w-3/4 shadow-md"></div>
                  </div>
  
              </div>
            </div>
            <!-- end top -->
    
            <!-- bottom -->
            
           
          </div>

            <!-- end bottom --> 
    
        </div>
        <!-- end left -->
    
    </div>
    
    
    
        <!-- end right -->
    
        <!-- left -->
     
        <!-- end left -->
    
    </div>
            
             
  
       
      
    <!--end of bars and charts-->

        

  </div>
  <!-- end content -->

</div>
<!-- end wrapper -->

<!-- script -->
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="js/scripts.js"></script>
<script>
    window.addEventListener('DOMContentLoaded', ()=> {
        const menuBtn = document.querySelector('#menu-btn')
        const dropdown = document.querySelector('#dropdown')
        
        menuBtn.addEventListener('click', () => {
            /* if(dropdown.classList.contains('hidden')){
                dropdown.classList.remove('hidden');
                dropdown.classList.add('flex');
            }else{
                dropdown.classList.remove('flex')
                dropdown.classList.add('hidden')
            } */

            dropdown.classList.toggle('hidden')
            dropdown.classList.toggle('flex')
        })

    })
</script>
<!-- end script -->

</body>
</html>

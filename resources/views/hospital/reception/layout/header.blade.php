<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>

    
    @livewireStyles
</head>

<!-- start navbar -->
<body class="bg-gray-900">
    <div class="md:fixed md:w-full md:top-0 md:z-20 flex flex-row flex-wrap items-center bg-white p-6 border-b border-gray-300">
        <div class="flex-none w-56 flex flex-row items-center">
            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light-with-button-svg3.svg" alt="logo" />
            <strong class="capitalize ml-1 flex-1">Medic-EMR</strong>
            
            <button id="sliderBtn" class="flex-none text-right text-gray-900 hidden  md:block">
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

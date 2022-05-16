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
    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
    
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
                                    class="mr-2 d-none d-lg-inline text-gray-600 small">{{ __('Dr. ') }} {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</span>
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
     
      <a href="{{ url('/dashboard') }}" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
        <i class="fad fa-shopping-cart text-xl mr-2"></i>         
         Dashboard
      </a>  
      
        <div id="dropdown" x-show="show" class="ml-4">
            <a href="{{ url('/appointment') }}" class="block px-3 py-2  capitalize font-medium text-base hover:text-teal-600 transition ease-in-out duration-500" href="#">
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
  <div class="bg-gray-200 flex-1 p-7  md:mt-4 grid grid-cols-8"> 
    
    <div class="col-span-2 bg-white border rounded p-6 mr-8">


    <ul>
        <li class="my-5 mt-0">
            <a class="btn-indigo text-left" href="#">
                <!-- <i class="text-xs fad fa-inbox mr-1"></i> -->
                Filter Patients
            </a>
        </li>

        <li>
            <a class="btn text-left text-gray-800 bg-white hover:bg-gray-100 hover:text-gray-900" href="#">
                <i class="text-xs fad fa-star mr-1"></i>
                OPD Patient
            </a>
        </li>
        <li>
            <a class="btn text-left text-gray-800 bg-white hover:bg-gray-100 hover:text-gray-900" href="#">
                <i class="text-xs fad fa-star mr-1"></i>
                IPD Patient
            </a>
        </li>
        <li>
            <a class="btn text-left text-gray-800 bg-white hover:bg-gray-100 hover:text-gray-900" href="#">
                <i class="text-xs fad fa-star mr-1"></i>
                Status
            </a>
        </li>
        

        
        <!-- seprator -->
        <hr class="my-10"> 

      <li>
            <a class="btn text-left text-gray-800 bg-white hover:bg-gray-100 hover:text-gray-900" href="#">
                <i class="text-indigo-700 fad fa-dot-circle mr-1"></i>
                Today's Appointement
            </a>
        </li>
        <li>
            <a class="btn text-left text-gray-800 bg-white hover:bg-gray-100 hover:text-gray-900" href="#">
                <i class="text-indigo-700 fad fa-dot-circle mr-1"></i>
                Tommorow Appointement
            </a>
        </li>
        <li>
            <a class="btn text-left text-gray-800 bg-white hover:bg-gray-100 hover:text-gray-900" href="#">
                <i class="text-indigo-700 fad fa-dot-circle mr-1"></i>
                Weekly Appointement
            </a>
        </li>                  
        
    </ul>

 </div>
    <div class="col-span-6 card flex flex-col">
    
     

    <div class="px-3 border-b">
        <div class="btn-indigo text-right px-1 py-2" href="#">
            <i >Add Appointements</i> 
       </div>
       
        <form action="" class="flex">
            <input class="p-3 flex-1" type="text" placeholder="search">
            <button type="submit" class="p-3">
                <i class="fad fa-search"></i>
            </button>
        </form>
    </div>

    <div class="flex-1 flex flex-col">

                    <!-- New Table -->
                    <div class="w-full overflow-hidden rounded-lg shadow-xs">
                        <div class="w-full overflow-x-auto">
                          <table class="w-full whitespace-no-wrap">
                            <thead>
                              <tr
                                class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                              >
                                <th class="px-4 py-3">Patient</th>
                                <th class="px-4 py-3">Amount</th>
                                <th class="px-4 py-3">Status</th>
                                <th class="px-4 py-3">Appointement Date</th>
                                <th class="px-4 py-3">Actions</th>
                              </tr>
                            </thead>
                            <tbody
                              class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                            >
                              <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3">
                                  <div class="flex items-center text-sm">
                                    <!-- Avatar with inset shadow -->
                                    <div
                                      class="relative hidden w-8 h-8 mr-3 rounded-full md:block"
                                    >
                                      <img
                                        class="object-cover w-full h-full rounded-full"
                                        src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                                        alt=""
                                        loading="lazy"
                                      />
                                      <div
                                        class="absolute inset-0 rounded-full shadow-inner"
                                        aria-hidden="true"
                                      ></div>
                                    </div>
                                    <div>
                                      <p class="font-semibold">Hans Burger</p>
                                      <p class="text-xs text-gray-600 dark:text-gray-400">
                                        10x Developer
                                      </p>
                                    </div>
                                  </div>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                  $ 863.45
                                </td>
                                <td class="px-4 py-3 text-xs">
                                  <span
                                    class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"
                                  >
                                    Approved
                                  </span>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                  6/10/2020
                                </td>
                                <td class="px-4 py-3">
                                    <div class="flex items-center space-x-4 text-sm">
                                      <button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" aria-label="Edit">
                                        <svg
                                          class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                          <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                                        </svg>
                                      </button>
                                      <button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"   aria-label="Delete" >
                                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"viewBox="0 0 20 20">
                                          <path
                                            fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                        </svg>
                                      </button>
                                    </div>
                                  </td>
                              </tr>
          
                              <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3">
                                  <div class="flex items-center text-sm">
                                    <!-- Avatar with inset shadow -->
                                    <div
                                      class="relative hidden w-8 h-8 mr-3 rounded-full md:block"
                                    >
                                      <img
                                        class="object-cover w-full h-full rounded-full"
                                        src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&facepad=3&fit=facearea&s=707b9c33066bf8808c934c8ab394dff6"
                                        alt=""
                                        loading="lazy"
                                      />
                                      <div
                                        class="absolute inset-0 rounded-full shadow-inner"
                                        aria-hidden="true"
                                      ></div>
                                    </div>
                                    <div>
                                      <p class="font-semibold">Jolina Angelie</p>
                                      <p class="text-xs text-gray-600 dark:text-gray-400">
                                        Unemployed
                                      </p>
                                    </div>
                                  </div>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                  $ 369.95
                                </td>
                                <td class="px-4 py-3 text-xs">
                                  <span
                                    class="px-2 py-1 font-semibold leading-tight text-orange-700 bg-orange-100 rounded-full dark:text-white dark:bg-orange-600"
                                  >
                                    Pending
                                  </span>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                  6/10/2020
                                </td>
                                <td class="px-4 py-3">
                                    <div class="flex items-center space-x-4 text-sm">
                                      <button
                                        class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                        aria-label="Edit"
                                      >
                                        <svg
                                          class="w-5 h-5"
                                          aria-hidden="true"
                                          fill="currentColor"
                                          viewBox="0 0 20 20"
                                        >
                                          <path
                                            d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"
                                          ></path>
                                        </svg>
                                      </button>
                                      <button
                                        class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                        aria-label="Delete"
                                      >
                                        <svg
                                          class="w-5 h-5"
                                          aria-hidden="true"
                                          fill="currentColor"
                                          viewBox="0 0 20 20"
                                        >
                                          <path
                                            fill-rule="evenodd"
                                            d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                            clip-rule="evenodd"
                                          ></path>
                                        </svg>
                                      </button>
                                    </div>
                                  </td>
                              </tr>
          
                              <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3">
                                  <div class="flex items-center text-sm">
                                    <!-- Avatar with inset shadow -->
                                    <div
                                      class="relative hidden w-8 h-8 mr-3 rounded-full md:block"
                                    >
                                      <img
                                        class="object-cover w-full h-full rounded-full"
                                        src="https://images.unsplash.com/photo-1551069613-1904dbdcda11?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                                        alt=""
                                        loading="lazy"
                                      />
                                      <div
                                        class="absolute inset-0 rounded-full shadow-inner"
                                        aria-hidden="true"
                                      ></div>
                                    </div>
                                    <div>
                                      <p class="font-semibold">Sarah Curry</p>
                                      <p class="text-xs text-gray-600 dark:text-gray-400">
                                        Designer
                                      </p>
                                    </div>
                                  </div>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                  $ 86.00
                                </td>
                                <td class="px-4 py-3 text-xs">
                                  <span
                                    class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-700"
                                  >
                                    Denied
                                  </span>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                  6/10/2020
                                </td>
                                <td class="px-4 py-3">
                                    <div class="flex items-center space-x-4 text-sm">
                                      <button
                                        class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                        aria-label="Edit"
                                      >
                                        <svg
                                          class="w-5 h-5"
                                          aria-hidden="true"
                                          fill="currentColor"
                                          viewBox="0 0 20 20"
                                        >
                                          <path
                                            d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"
                                          ></path>
                                        </svg>
                                      </button>
                                      <button
                                        class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                        aria-label="Delete"
                                      >
                                        <svg
                                          class="w-5 h-5"
                                          aria-hidden="true"
                                          fill="currentColor"
                                          viewBox="0 0 20 20"
                                        >
                                          <path
                                            fill-rule="evenodd"
                                            d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                            clip-rule="evenodd"
                                          ></path>
                                        </svg>
                                      </button>
                                    </div>
                                  </td>
                              </tr>
          
                              <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3">
                                  <div class="flex items-center text-sm">
                                    <!-- Avatar with inset shadow -->
                                    <div
                                      class="relative hidden w-8 h-8 mr-3 rounded-full md:block"
                                    >
                                      <img
                                        class="object-cover w-full h-full rounded-full"
                                        src="https://images.unsplash.com/photo-1551006917-3b4c078c47c9?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                                        alt=""
                                        loading="lazy"
                                      />
                                      <div
                                        class="absolute inset-0 rounded-full shadow-inner"
                                        aria-hidden="true"
                                      ></div>
                                    </div>
                                    <div>
                                      <p class="font-semibold">Rulia Joberts</p>
                                      <p class="text-xs text-gray-600 dark:text-gray-400">
                                        Actress
                                      </p>
                                    </div>
                                  </div>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                  $ 1276.45
                                </td>
                                <td class="px-4 py-3 text-xs">
                                  <span
                                    class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"
                                  >
                                    Approved
                                  </span>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                  6/10/2020
                                </td>
                                <td class="px-4 py-3">
                                    <div class="flex items-center space-x-4 text-sm">
                                      <button
                                        class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                        aria-label="Edit"
                                      >
                                        <svg
                                          class="w-5 h-5"
                                          aria-hidden="true"
                                          fill="currentColor"
                                          viewBox="0 0 20 20"
                                        >
                                          <path
                                            d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"
                                          ></path>
                                        </svg>
                                      </button>
                                      <button
                                        class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                        aria-label="Delete"
                                      >
                                        <svg
                                          class="w-5 h-5"
                                          aria-hidden="true"
                                          fill="currentColor"
                                          viewBox="0 0 20 20"
                                        >
                                          <path
                                            fill-rule="evenodd"
                                            d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                            clip-rule="evenodd"
                                          ></path>
                                        </svg>
                                      </button>
                                    </div>
                                  </td>
                              </tr>
          
                              <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3">
                                  <div class="flex items-center text-sm">
                                    <!-- Avatar with inset shadow -->
                                    <div
                                      class="relative hidden w-8 h-8 mr-3 rounded-full md:block"
                                    >
                                      <img
                                        class="object-cover w-full h-full rounded-full"
                                        src="https://images.unsplash.com/photo-1546456073-6712f79251bb?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                                        alt=""
                                        loading="lazy"
                                      />
                                      <div
                                        class="absolute inset-0 rounded-full shadow-inner"
                                        aria-hidden="true"
                                      ></div>
                                    </div>
                                    <div>
                                      <p class="font-semibold">Wenzel Dashington</p>
                                      <p class="text-xs text-gray-600 dark:text-gray-400">
                                        Actor
                                      </p>
                                    </div>
                                  </div>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                  $ 863.45
                                </td>
                                <td class="px-4 py-3 text-xs">
                                  <span
                                    class="px-2 py-1 font-semibold leading-tight text-gray-700 bg-gray-100 rounded-full dark:text-gray-100 dark:bg-gray-700"
                                  >
                                    Expired
                                  </span>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                  6/10/2020
                                </td>
                                <td class="px-4 py-3">
                                    <div class="flex items-center space-x-4 text-sm">
                                      <button
                                        class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                        aria-label="Edit"
                                      >
                                        <svg
                                          class="w-5 h-5"
                                          aria-hidden="true"
                                          fill="currentColor"
                                          viewBox="0 0 20 20"
                                        >
                                          <path
                                            d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"
                                          ></path>
                                        </svg>
                                      </button>
                                      <button
                                        class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                        aria-label="Delete"
                                      >
                                        <svg
                                          class="w-5 h-5"
                                          aria-hidden="true"
                                          fill="currentColor"
                                          viewBox="0 0 20 20"
                                        >
                                          <path
                                            fill-rule="evenodd"
                                            d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                            clip-rule="evenodd"
                                          ></path>
                                        </svg>
                                      </button>
                                    </div>
                                  </td>
                              </tr>
          
                              <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3">
                                  <div class="flex items-center text-sm">
                                    <!-- Avatar with inset shadow -->
                                    <div
                                      class="relative hidden w-8 h-8 mr-3 rounded-full md:block"
                                    >
                                      <img
                                        class="object-cover w-full h-full rounded-full"
                                        src="https://images.unsplash.com/photo-1502720705749-871143f0e671?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&s=b8377ca9f985d80264279f277f3a67f5"
                                        alt=""
                                        loading="lazy"
                                      />
                                      <div
                                        class="absolute inset-0 rounded-full shadow-inner"
                                        aria-hidden="true"
                                      ></div>
                                    </div>
                                    <div>
                                      <p class="font-semibold">Dave Li</p>
                                      <p class="text-xs text-gray-600 dark:text-gray-400">
                                        Influencer
                                      </p>
                                    </div>
                                  </div>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                  $ 863.45
                                </td>
                                <td class="px-4 py-3 text-xs">
                                  <span
                                    class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"
                                  >
                                    Approved
                                  </span>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                  6/10/2020
                                </td>
                                <td class="px-4 py-3">
                                    <div class="flex items-center space-x-4 text-sm">
                                      <button
                                        class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                        aria-label="Edit"
                                      >
                                        <svg
                                          class="w-5 h-5"
                                          aria-hidden="true"
                                          fill="currentColor"
                                          viewBox="0 0 20 20"
                                        >
                                          <path
                                            d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"
                                          ></path>
                                        </svg>
                                      </button>
                                      <button
                                        class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                        aria-label="Delete"
                                      >
                                        <svg
                                          class="w-5 h-5"
                                          aria-hidden="true"
                                          fill="currentColor"
                                          viewBox="0 0 20 20"
                                        >
                                          <path
                                            fill-rule="evenodd"
                                            d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                            clip-rule="evenodd"
                                          ></path>
                                        </svg>
                                      </button>
                                    </div>
                                  </td>
                              </tr>
          
                              <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3">
                                  <div class="flex items-center text-sm">
                                    <!-- Avatar with inset shadow -->
                                    <div
                                      class="relative hidden w-8 h-8 mr-3 rounded-full md:block"
                                    >
                                      <img
                                        class="object-cover w-full h-full rounded-full"
                                        src="https://images.unsplash.com/photo-1531746020798-e6953c6e8e04?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                                        alt=""
                                        loading="lazy"
                                      />
                                      <div
                                        class="absolute inset-0 rounded-full shadow-inner"
                                        aria-hidden="true"
                                      ></div>
                                    </div>
                                    <div>
                                      <p class="font-semibold">Maria Ramovic</p>
                                      <p class="text-xs text-gray-600 dark:text-gray-400">
                                        Runner
                                      </p>
                                    </div>
                                  </div>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                  $ 863.45
                                </td>
                                <td class="px-4 py-3 text-xs">
                                  <span
                                    class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"
                                  >
                                    Approved
                                  </span>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                  6/10/2020
                                </td>
                                <td class="px-4 py-3">
                                    <div class="flex items-center space-x-4 text-sm">
                                      <button
                                        class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                        aria-label="Edit"
                                      >
                                        <svg
                                          class="w-5 h-5"
                                          aria-hidden="true"
                                          fill="currentColor"
                                          viewBox="0 0 20 20"
                                        >
                                          <path
                                            d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"
                                          ></path>
                                        </svg>
                                      </button>
                                      <button
                                        class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                        aria-label="Delete"
                                      >
                                        <svg
                                          class="w-5 h-5"
                                          aria-hidden="true"
                                          fill="currentColor"
                                          viewBox="0 0 20 20"
                                        >
                                          <path
                                            fill-rule="evenodd"
                                            d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                            clip-rule="evenodd"
                                          ></path>
                                        </svg>
                                      </button>
                                    </div>
                                  </td>
                              </tr>
          
                              
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <div
                          class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800"
                        >
                          <span class="flex items-center col-span-3">
                            Showing 21-30 of 100
                          </span>
                          <span class="col-span-2"></span>
                          <!-- Pagination -->
                          <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
                            <nav aria-label="Table navigation">
                              <ul class="inline-flex items-center">
                                <li>
                                  <button
                                    class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple"
                                    aria-label="Previous"
                                  >
                                    <svg
                                      aria-hidden="true"
                                      class="w-4 h-4 fill-current"
                                      viewBox="0 0 20 20"
                                    >
                                      <path
                                        d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                        clip-rule="evenodd"
                                        fill-rule="evenodd"
                                      ></path>
                                    </svg>
                                  </button>
                                </li>
                                <li>
                                  <button
                                    class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                                  >
                                    1
                                  </button>
                                </li>
                                <li>
                                  <button
                                    class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                                  >
                                    2
                                  </button>
                                </li>
                                <li>
                                  <button
                                    class="px-3 py-1 text-white transition-colors duration-150 bg-purple-600 border border-r-0 border-purple-600 rounded-md focus:outline-none focus:shadow-outline-purple"
                                  >
                                    3
                                  </button>
                                </li>
                                <li>
                                  <button
                                    class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                                  >
                                    4
                                  </button>
                                </li>
                                <li>
                                  <span class="px-3 py-1">...</span>
                                </li>
                                <li>
                                  <button
                                    class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                                  >
                                    8
                                  </button>
                                </li>
                                <li>
                                  <button
                                    class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                                  >
                                    9
                                  </button>
                                </li>
                                <li>
                                  <button
                                    class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple"
                                    aria-label="Next"
                                  >
                                    <svg
                                      class="w-4 h-4 fill-current"
                                      aria-hidden="true"
                                      viewBox="0 0 20 20"
                                    >
                                      <path
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd"
                                        fill-rule="evenodd"
                                      ></path>
                                    </svg>
                                  </button>
                                </li>
                              </ul>
                            </nav>
                          </span>
                        </div>
                      </div>
          
    </div>

   
</div>

  </div>
  <!-- end content -->

</div>